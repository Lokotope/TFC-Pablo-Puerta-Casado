<?php
include "cart.php";

if(!isset($_SESSION['Usuario'])){
    echo '<script>window.alert("Necesita un usuario registrado para comprar!"); window.location = "../usuarios/zonaUsuarios.php";</script>';
}else{

$cart = new Cart;

// include database configuration file
include '../conexionBBDD/datosConexion.php';


if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
       
        $IDproducto = $_REQUEST['id']; // $_REQUEST['id'] se pasa como parámetro al pulsar sobre añadir al carrito
        
        $query = $conexion->prepare("SELECT * FROM productos WHERE codProducto = :IDproducto");
        $query->bindParam(':IDproducto', $IDproducto);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $itemData = array(
            'id' => $row['codProducto'],
            'name' => $row['nombreProducto'],
            'price' => $row['precio'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'../index.php';
        header("Location: ".$redirectLoc);
        
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
        
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
        
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $conexion->prepare("INSERT INTO pedidos (idUsuarioPedido, precioTotal, creado, modificado) VALUES (:idUsuarioPedido, :precioTotal, :creado, :modificado)");
        
         // Parámetros
        $idUsuarioPedido = $_SESSION['sessCustomerID'];
        $precioTotal = $cart->total();
        date_default_timezone_set('Europe/Madrid');
        $creado = date("Y-m-d H:i:s");
        $modificado = date("Y-m-d H:i:s");
        
        // Asignar parámetros
        $insertOrder->bindParam(':idUsuarioPedido', $idUsuarioPedido, PDO::PARAM_STR);
        $insertOrder->bindParam(':precioTotal', $precioTotal, PDO::PARAM_STR);
        $insertOrder->bindParam(':creado', $creado, PDO::PARAM_STR);
        $insertOrder->bindParam(':modificado', $modificado, PDO::PARAM_STR);
        
        $insertOrder->execute();
        
        if($insertOrder){
        $orderID = $conexion->lastInsertId();
        // Obtener objetos del carrito
        $cartItems = $cart->contents();
        foreach($cartItems as $item){
            $insertOrderItems = $conexion->prepare("INSERT INTO articulos_pedido (idPedido, idProducto, cantidad) VALUES (:order_id, :product_id, :quantity)");
            
            $insertOrderItems->bindParam(':order_id', $orderID);
            $insertOrderItems->bindParam(':product_id', $item['id']);
            $insertOrderItems->bindParam(':quantity', $item['qty']);
            
            $insertOrderItems->execute();
        }
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSucces.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
}