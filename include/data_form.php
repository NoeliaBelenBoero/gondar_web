<?php

$conex = mysqli_connect('localhost', 'root', 'marc2023', 'proyecto_gd');

  if (isset($_POST['send'])){
    if (strlen($_POST['name']) >= 1 &&
       strlen($_POST['email']) >= 1 &&
       strlen($_POST['phone']) >= 1 &&
       strlen($_POST['message']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $consult = "INSERT INTO `data_client`(`name`, `email`, `phone`, `message`) 
        VALUES ('$name','$email','$phone','$message')";
        $result = mysqli_query($conex, $consult);
       }
   }
        
   header('Location: ../index.php');
?>

