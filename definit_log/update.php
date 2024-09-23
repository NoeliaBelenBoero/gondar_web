<?php
   include("conexion.php");
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
    <title>Update</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
</head>

<body>
    <div class="editar_producto" id="editar_producto">
        <form action="edit_product.php" method="post" enctype="multipart/form-data" class="agregar">
            <h1>Editar producto</h1>
            <input type="hidden" name="id" value="<?= $row['id_product']?>">
            <input class="date" type="text" name="name" placeholder="NOMBRE DEL PRODUCTO" value="<?= $row['name'] ?>">
            <input class="date" type="text" name="description" placeholder="DESCRIPCION DEL PRODUCTO"
                value="<?= $row['description'] ?>">
            <label for="image">IMAGEN:</label>
            <img height="100px" width="100px" src="<?php echo $row['image'] ?>">
            <input class="input_file" type="file" name="image" require>
            <div class="btns">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                <!--<input class="input_submit" type="submit" name="actualizar" value="Actualizar información">-->
                <button type="submit" class="btn btn-primary"></i>ACTUALIZAR</button>
            </div>

        </form>
    </div>
    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
 ?>