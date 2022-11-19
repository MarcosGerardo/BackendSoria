<?php
include("db.php");
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $query = "DELETE FROM paquetes WHERE id = $id ";
    $result = mysqli_query($conn, $query);
   
    $_SESSION['message'] = 'Paquete eliminado';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}

?>