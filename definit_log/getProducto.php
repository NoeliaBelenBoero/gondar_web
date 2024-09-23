<?php 
  require 'conexion.php';

  $id = $conex->real_escape_string($_POST['id_product']);

  $sql = "SELECT id_product, name, description, image, id_category FROM product WHERE id_product=$id LIMIT 1";
  $resultado = $conex->query($sql);
  $rows = $resultado->num_rows;

  $producto = [];

  if($rows > 0){
      $producto = $resultado->fetch_array();
  }

  echo json_encode($producto, JSON_UNESCAPED_UNICODE);

?>