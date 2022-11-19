<?php
include("db.php");
if (isset($_POST['save_producto'])){
 
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $IMAGE = $_POST['Imagen'];
   

    $query= "INSERT INTO productos(producto, precio, imagen) VALUES ('$Producto', '$Precio','$IMAGE')";
    $result= mysqli_query($conn, $query);
$_SESSION['message'] = 'Producto guardado correctamente';
$_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>