<?php
include("db-crud.php");

 include('header_crud.php'); 
$codigo = '';
$titulo = '';
$contenido = '';
$año = '';
$descripcion = '';
$fotografo = '';
$notas = '';
$descriptores = '';
$ejemplares = '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM repositorio WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $codigo = $row['codigo'];
    $titulo = $row['titulo'];
    $contenido = $row['contenido'];
    $año = $row['año'];
    $descripcion = $row['descripcion'];
    $fotografo = $row['fotografo'];
    $notas = $row['notas'];
    $descriptores = $row['descriptores'];
    $ejemplares = $row['ejemplares'];
  
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $codigo = $_POST['codigo'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];
  $año = $_POST['año'];
  $descripcion = $_POST['descripcion'];
  $fotografo = $_POST['fotografo'];
  $notas = $_POST['notas'];
  $descriptores = $_POST['descriptores'];
  $ejemplares = $_POST['ejemplares'];
 

  $query = "UPDATE repositorio set
  codigo = '$codigo',
  titulo = '$titulo', 
  contenido = '$contenido',
  año = '$año',
  descripcion = '$descripcion', 
  fotografo = '$fotografo', 
  notas = '$notas', 
  descriptores = '$descriptores', 
  ejemplares = '$ejemplares'
  WHERE id = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: crud.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
         <h5>  <strong> Actualiza Codigo:</strong> </h5> <textarea name="codigo" class="form-control" placeholder="Actualiza Codigo" cols="30" rows="10"> <?php echo $codigo; ?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza titulo: </strong> </h5>  <textarea name="titulo"class="form-control"  placeholder="Actualiza titulo"  cols="30" rows="10"> <?php echo $titulo; ?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Contenido: </strong>  </h5>  <textarea name="contenido" class="form-control" cols="30" rows="10"><?php echo $contenido;?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Año: </strong>  </h5>  <textarea name="año" class="form-control"  placeholder="Actualiza año"  cols="30" rows="10"> <?php echo $año; ?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Descripcion: </strong>  </h5>  <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $descripcion;?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Fotografo: </strong>   </h5>  <textarea name="fotografo"  class="form-control"  placeholder="Actualiza Fotografo"  cols="30" rows="10"> <?php echo $fotografo; ?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Notas: </strong>  </h5> <textarea name="notas" class="form-control" cols="30" rows="10"><?php echo $notas;?></textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Descriptores:</strong>  </h5> <textarea name="descriptores"  class="form-control"  placeholder="Actualiza descriptores"  cols="30" rows="10"> <?php echo $descriptores; ?> </textarea>
        </div>
        <div class="form-group">
        <h5>  <strong> Actualiza Ejemplares: </strong>  </h5> <textarea name="ejemplares" class="form-control" placeholder="Actualiza ejemplares"  cols="30" rows="10"> <?php echo $ejemplares; ?> </textarea>
        </div>
        <div class="form-group">
        
        
       

        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>

