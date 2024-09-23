<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla login</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_login.css">
    <!--<link rel="stylesheet" href="consult.css">-->
    <link rel="stylesheet" href="../styles/footer_style.css">
    <!--<link rel="stylesheet" href="/styles/bootstrap.min.css">-->
</head>


<body>

    <div class="form__login" id="iniciar__sesion">
        <a class="back_1" href="../index.php"><i class="fas fa-arrow-left">  Volver</i></a>
        <form class="iniciar__sesion" id="iniciar__sesion">
            <h1>Iniciar Sesión</h1>
            <input class="sesion" id="email" type="email" placeholder="Escriba su correo electrónico" minlength="30"
                required>
            <input class="sesion" id="password" type="password" placeholder="Escriba su contraseña" required>
            <button class="sesion__btn">Entrar</button>
        </form>
    </div>

    <?php 
       include('../include/footer.php')
    ?>

</body>

<script src="login.js"></script>

</html>