<?php
    include("config.php");
    include("session.php");

    $id = $_POST['id_']; # ID de busqueda
    $id_ = $_POST['id']; # ID de cliente
    $firstname=$_POST['firstname'];
    $cost=$_POST['cost'];

    $sql = "UPDATE servicios SET id = '$id_', firstname = '$firstname', cost = '$cost'
    WHERE firstname = '$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio no Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
?>