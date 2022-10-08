<?php
    include('config.php');
    include('session.php');

    $id = $_GET['id_'];
    $sql = "DELETE FROM servicios WHERE firstname = '$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio eliminado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio no eliminado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>