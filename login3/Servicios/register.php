<?php
    include("config.php");
    include("session.php");

    $id_=$_POST['id'];
    $firstname=$_POST['firstname'];
    $cost=$_POST['cost'];

    $sql = "INSERT INTO servicios(id ,firstname, cost) VALUES ('$id_', '$firstname', '$cost')";

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