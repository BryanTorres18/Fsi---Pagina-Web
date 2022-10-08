<?php
    include("config.php");
    include("session.php");

    $id_=$_POST['id'];
    $firstname=$_POST['firstname'];
    $phone=$_POST['phone'];
    $direction=$_POST['direction'];
    $email=$_POST['email'];

    $sql = "INSERT INTO clientes(id ,firstname, phone, direction, email) VALUES ('$id_', '$firstname', '$phone', '$direction', '$email')";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Nuevo Cliente creado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Cliente no creado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>