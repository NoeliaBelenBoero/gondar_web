<?php
   $conex = mysqli_connect('localhost', 'root', 'marc2023', 'proyecto_gd');

   $sqlProductos = "SELECT p.id_product, p.name, p.description, p.image, c.name AS category FROM product AS p INNER JOIN category AS c ON p.id_category=c.id";
   $productos = $conex->query($sqlProductos);

   $dir = "img_download/";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="products.css">
</head>

<body>
    <main>
        <div class="swiper mySwiper">
            <a class="back" href="index.php"><i class="fas fa-arrow-left"></i>VOLVER</a>
            <div class="swiper-wrapper">
                <?php while($row_producto = $productos->fetch_assoc()) { ?>

                <div class="swiper-slide">
                    <div class="product-content">
                        <div class="product-txt">
                            <h2><?= $row_producto['name'] ?></h2>
                            <p><?= $row_producto['description'] ?></p><br>
                            <h3><?= $row_producto['category'] ?></h3>
                        </div>
                        <div class="product-img">
                            <img src="definit_log/<?= $row_producto['image']?>"/>
                        </div>
                    </div>
                    <div class="contact">
                       <p>consultar precio</p>
                       <a href="https://wa.me/542234394145" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                       <a href="tel:+542233519467" class="phone"><i class="fa-solid fa-phone"></i></a>
                    </div>
                </div>

                <?php } ?>

                <?php
                 $sqlCategoria = "SELECT id, name FROM category";
                $categorias = $conex->query($sqlCategoria); 
                ?>
                
            </div>
        </div>

        <?php
           include("include/footer.php"); 
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                depth: 500,
                modifer: 1,
                slidesShadows: true,
                rotate: 0,
                stretch: 0
            }
        })
        </script>
        
    </main>
</body>

</html>