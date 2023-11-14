<?php
include 'db.php';
$buscar = $_POST['buscar'];

$SQL_READ = "SELECT * FROM repositorio WHERE descriptores LIKE '%$buscar%'
 OR codigo  LIKE '%$buscar%' OR titulo  LIKE '%$buscar%' OR fotografo  LIKE '%$buscar%' OR año LIKE '%$buscar%'";

$sql_query = mysqli_query($conn, $SQL_READ);

if (mysqli_num_rows($sql_query) > 0) {
    // Se encontraron resultados
    // ... Codigo para mostrar los resultados encontrados
} else {
    // No se encontraron resultados
    echo "No se encontraron resultados. Por favor, realiza otra busqueda.";
}
?>
