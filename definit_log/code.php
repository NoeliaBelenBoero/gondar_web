<?php

require 'conexion.php';

$nombre = $conex->real_escape_string($_POST['name']);
$descripcion = $conex->real_escape_string($_POST['description']);
$imagen_name = $_FILES['image']['name'];
$rutTemp = $_FILES['image']['tmp_name'];
$rutDest = "img_download/".$imagen_name;

move_uploaded_file($rutTemp, $rutDest);

$categoria = $conex->real_escape_string($_POST['category']);

$sql = "INSERT INTO product(name, image, description, id_category) VALUES ('$nombre', '$rutDest', '$descripcion', $categoria)";

if($conex->query($sql)){
    $id = $conex->insert_id;
}

header('Location: consult.php');

/*$imagen_name = $_FILES['image']['name'];
$rutTemp = $_FILES['image']['tmp_name'];
$rutDest = "img_download/".$imagen_name;

move_uploaded_file($rutTemp, $rutDest);

$consult = "INSERT INTO `product`(`name`, `image`, `description`) VALUES ('$nombre','$rutDest','$descripcion')";
$result = $conex->query($consult);

if ($result) {
    Header("location: consult.php");
} */

?>