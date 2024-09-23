<?php

require 'conexion.php';

$id = $conex->real_escape_string($_POST['id_product']);
$nombre = $conex->real_escape_string($_POST['name']);
$descripcion = $conex->real_escape_string($_POST['description']);

$imagen_name = $_FILES['image']['name'];
$rutTemp = $_FILES['image']['tmp_name'];
$rutDest = "img_download/".$imagen_name;

move_uploaded_file($rutTemp, $rutDest);

$categoria = $conex->real_escape_string($_POST['category']);

$sql = "UPDATE product SET name= '$nombre', description= '$descripcion', image= '$rutDest', id_category= $categoria WHERE id_product= $id";
if($conex->query($sql)){
}

header('Location: consult.php');

?>