<?php
include("db.php");
if (isset($_POST['save_paquete'])){
 
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
   

    $query= "INSERT INTO paquetes(nombre,descripcion, precio, imagen) VALUES ('$nombre','$descripcion', '$precio','$imagen')";
    $result= mysqli_query($conn, $query);
$_SESSION['message'] = 'Producto guardado correctamente';
$_SESSION['message_type'] = 'success';

    header("Location: index.php");
}
?>