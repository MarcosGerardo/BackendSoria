<?php
include("db.php");
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $query = "SELECT * FROM paquetes WHERE id = $id ";
    $result = mysqli_query($conn, $query);

   
       
        $row = mysqli_fetch_array($result);
        $nombre= $row['nombre'];
        $descripcion= $row['descripcion'];
        $precio= $row['precio'];
        $image= $row['imagen'];
   
   

}
if(isset($_POST['update'])) {
    $id= $_GET ['id'];
    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
    $precio = $_POST['precio'];
    $image= $_POST['imagen'];


    $query = "UPDATE paquetes set nombre = '$nombre', descripcion ='$descripcion' ,precio ='$precio',  imagen='$image'  WHERE id=$id ";
    mysqli_query($conn, $query); 
    header("Location: index.php");
}

?>
<?php
include("includes/header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-5 mx-auto">
<div class="card card-body">
    <form action="editpaquete.php?id=<?php echo $_GET['id'];?>" method= "POST">
        <div class="form-group">
            <input type="text" name ="nombre" value="<?php echo $nombre; ?>" class="form-control"
           placeholder="Paquete actualizado" >
        </div>
        <div class="form-group">
        <textarea type="text" name ="descripcion" value="<?php echo $descripcion; ?>" class="form-control"
           placeholder="Paquete actualizado"> </textarea>
        </div>
        <div class="form-group">
            <textarea name="precio" rows="2" " class="form-control"
           placeholder="Precio actualizado"> <?php echo $precio; ?></textarea>
        </div>
        <div class="form-group">
        <label for="file">Carga una imagen para un nuevo paquete : </label>
            <input type="file" name="imagen" class="form-control" placeholder="Imagen" autofocus>
        </div>
        </div>
        <button class="btn btn-success" name="update"> ACTUALIZAR</button>
    </form>
</div>
        </div>
    </div>

</div>
<?php
include("includes/footer.php");
?>