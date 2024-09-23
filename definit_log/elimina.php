<?php
   include("conexion.php");

   $id = $_GET['id'];

   $sql="DELETE FROM `product` WHERE id_product='$id' ";
   $result = $conex->query($sql);

   if ($result) { ?>

    <?php
      Header("location: consult.php");
    }
   ?>
