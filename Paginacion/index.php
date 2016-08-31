<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=paginacion' , 'root' ,'');
} catch (PDOException $e) {
	echo "ERROR: " . $e->getMessage();
	die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorpagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorpagina - $postPorpagina ) : 0;

$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
	LIMIT $inicio, $postPorpagina
");

$articulos->execute();
$articulos = $articulos->fetchall();

// print_r($articulos);

if (!$articulos) {
	header('Location: http://localhost/Curso_php/Paginacion/#');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorpagina);

require 'index.vista.php';


 ?>