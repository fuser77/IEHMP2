<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="./style-resultados-finales.css">
    <title>Resultados</title>
    <!-- Javascript -->
</head>
<body>
<?php include("db.php");
mysqli_set_charset($conn, "utf8");

?>

<?php 
    include 'buscador.php';
?>
<?php
$titulo = '';
$contenido = '';
$año = '';
$descripcion = '';
$fotografo = '';
$notas = '';
$descriptores = '';
$imagen = '';
$ejemplares = '';
$codigo = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM repositorio WHERE id=$id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $titulo = $row['titulo'];
        $contenido = $row['contenido'];
        $a���o = $row['año'];
        $descripcion = $row['descripcion'];
        $fotografo = $row['fotografo'];
        $notas = $row['notas'];
        $imagen = $row['imagen'];
        $ejemplares = $row['ejemplares'];
        $codigo = $row['codigo'];
    }
}
?>
<header> 
    <div>
        <?php include 'modulos_iehmp/cabecera.php'; ?>
    </div>
</header>
<main> 
    <section class="container_info">
            <div class="imagen" >
                <img src="uploads<?php echo substr($row['imagen'], 7); ?>" alt="" >
            </div>
                    <div class="info">
                    <div class="titulo">
                        <strong>Título:</strong> <?= $row['titulo'] ?>
                    </div>
                    <div class="contenido">
                        <strong>Contenido:</strong> <?= $row['contenido'] ?>
                    </div>
                    <div class="año">
                        <strong>Año:</strong> <?= $row['año'] ?>
                    </div>
                    <div class="descripcion">
                        <strong>Descripción:</strong> <?= $row['descripcion'] ?>
                    </div>
                    <?php if (!empty($row['fotografo'])) { ?>
                    <div class="fotografo">
                        <strong>Fotógrafo:</strong> <?= $row['fotografo'] ?>
                    </div>
                <?php } ?>
                    <div class="notas">
                        <strong>Notas:</strong> <?= $row['notas'] ?>
                    </div>
                    <div class="ejemplares">
                        <strong>ejemplares:</strong> <?= $row['ejemplares'] ?>
                    </div>
                    <div class="codigo">
                        <strong>código:</strong> <?= $row['codigo'] ?>
                    </div>
                    <div class="licencia">
                        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licencia Creative Commons Atribución-NoComercial-SinDerivadas 4.0 Internacional</a>.
                    </div>
                </div>
            
    </section>
            <div class="full-titulo">
                        <?= $row['titulo'] ?>
                    </div>
            <div class="licencia-footer">
                <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licencia Creative Commons Atribución-NoComercial-SinDerivadas 4.0 Internacional</a>.
            </div>
            <div class="full-imagen">
                <img src="uploads<?php echo substr($row['imagen'], 7); ?>" alt="" >
            </div>
          
        
</main>
<footer> 
    <?php include 'modulos_iehmp/pie.php'; ?>  
</footer>
</body>
</html>