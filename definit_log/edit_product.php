<?php
   include("conexion.php");

   $id = $_POST['id'];
   $name = $_POST['name'];
   $descripcion = $_POST['description'];
   $imagen_name = $_FILES['image']['name'];
   $imagen_type = strtolower(pathinfo($imagen_name, PATHINFO_EXTENSION));
   $rutTemp = $_FILES['image']['tmp_name'];
   $rutDest = "img_download/".$imagen_name;

  if (is_file($rutTemp)) {
   move_uploaded_file($rutTemp, $rutDest);
   $consult = "UPDATE `product` SET name='$name',image= '$rutDest', description ='$descripcion' WHERE id_product = '$id' ";
   $result = $conex->query($consult);

   if ($result) {
      Header("location: consult.php");
   } 
} else{ 
   $consult = "UPDATE `product` SET name='$name',image= '$rutDest', description ='$descripcion' WHERE id_product = '$id' ";
   $result = $conex->query($consult);
  }
Header("location: consult.php");
   ?>