<link rel="stylesheet" href="./styles/comments.css">
<?php

   $conex = mysqli_connect('localhost', 'root', 'marc2023', 'proyecto_gd');
   $consulta = "SELECT * FROM `data_client` ORDER BY `id` DESC";
   $resultado = mysqli_query($conex, $consulta);

   if ($resultado) {
      while($row = $resultado -> fetch_array()) {
        $nombre = $row['name'];
        $mensaje = $row['message'];
?>

        <div class="container">

           <div class="icon_user">
              <i class="fa-solid fa-user"></i>
           </div>
          
           <div class="container__info">
               <h2><?php echo $nombre; ?></h2>
               <p><?php echo $mensaje; ?></p>
           </div>
           
        </div>

<?php
      }
   }

?>