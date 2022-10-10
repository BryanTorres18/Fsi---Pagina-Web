<?php
    include("config.php");
    include("session.php");

    $id = $_POST['id_']; # ID de busqueda
    $id_ = $_POST['id']; # ID de cliente
    $firstname=$_POST['firstname'];
    $phone=$_POST['phone'];
    $direction=$_POST['direction'];
    $email=$_POST['email'];

    $sql = "UPDATE clientes SET id = '$id_', firstname = '$firstname', phone = '$phone', direction = '$direction' , email = '$email'
    WHERE firstname = '$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Cliente Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Cliente no Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
?>