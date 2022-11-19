<center> <h2 clas="text-center">Paquetes</h2> </center>
<div class="container p-4">
<div class="row">
    <div class="col-md-4">
      <?php if (isset($_SESSION['message'])) {?>
        <div class="alert alert-<? $_SESSION['message_type']?>alert-dismissible fade show" role="alert">
 <?= $_SESSION['message'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset();} ?>
  <div class="card card-body">
    <form action="save_paquete.php" method="POST"> 
    <label for="file">Agregar nuevo paquete : </label>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Paquete Nuevo" autofocus>
        </div>
        <div class="form-group">
        <label for="file">Agrega una descripción: </label>
            <textarea name="descripcion" class="form-control" placeholder="descripcion " autofocus>
      </textarea>   
        </div>
        <div class="form-group">
        <label for="file">Agrega el precio del paquete nuevo : </label>
            <input type="text" name="precio" class="form-control" placeholder="Precio " autofocus>
        </div>
        <div class="form-group">
        <label for="file">Carga una imagen para el paquete : </label>
            <input type="file" name="imagen" class="form-control" placeholder="Precio" autofocus>
        </div>
        <input type="submit" class="btn btn-success btn-block" name="save_paquete" value="Guardar Paquete">
</form>
  </div>
    </div>
    <div class="col-md-8">

    <table class="table table-bordered">
<thead>
  <tr>
   
    <th>nombre</th>
    <th>descripcion</th>
    <th>precio</th>
    <th>imagen</th>
  </tr>
</thead>
<tbody>
  <?php
  $query= "SELECT * FROM paquetes";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result)){ ?>
  <tr>
  <td><?php echo $row['nombre'] ?></td>
  <td><?php echo $row['descripcion'] ?></td>
  <td><?php echo $row['precio'] ?></td>
  <td><?php echo $row['imagen'] ?></td>
  <td>
    <a href="editpaquete.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
      <i class="fas fa-marker"></i>
    </a>
    <a href="deletepaquete.php?id=<?php echo $row['id'] ?>"class="btn btn-danger">
    <i class="far fa-trash-alt"></i>
    </a>
  </td>
  </tr>

  <?php } ?>
</tbody>
</table>
    </div>
</div>
</div>

