<?php
   $conex = mysqli_connect('localhost', 'root', 'marc2023', 'proyecto_gd');
   $id = $_GET['id'];

   

   $sql = "SELECT * FROM `product` WHERE id_product='$id' ";
   $query = mysqli_query($conex, $sql);


   $row = mysqli_fetch_array($query);
  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/product.css">
    <link rel="stylesheet" href="../styles/footer_style.css">
</head>

<body>
        <a class="back" href="../index.php"><i class="fas fa-arrow-left"></i>VOLVER</a>
        <div class="editar_producto" id="editar_producto">
             <div class="text-container">
                <h1><?php echo $row['name'] ?></h1>
                <p><?php echo $row['description'] ?></p>
            </div>
            <img src="../definit_log/<?php echo $row['image'] ?>">
            <div class="contact">
                <p>consultar precio</p>
                <a href="https://wa.me/542234394145" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="tel:+542233519467" class="phone"><i class="fa-solid fa-phone"></i></a>
            </div>
        </div>
        
        <?php 
           include('footer.php');
        ?>
   
</body>

</html>