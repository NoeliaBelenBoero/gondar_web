<?php
   $conex = mysqli_connect('localhost', 'root', 'marc2023', 'proyecto_gd');
?>

<div class="search_container">
    <div id="container__search">
        <input type="text" id="input_search" placeholder="¿Qué producto deseas buscar?">
    </div>

    <ul id="box_search">
        <?php
            $sql ="SELECT * from product";
            $result = mysqli_query($conex, $sql);

            while ($mostrar = mysqli_fetch_array($result)){
        ?>


          <li><a href="include/product.php?id=<?= $mostrar['id_product']?>"><i class="fa-solid fa-magnifying-glass"></i><?php echo $mostrar['name']?></a></li>



        <?php
           }
        ?>

    </ul>

    <div id="cover_search"></div>
</div>

<script src="./scripts/search_script.js"></script>