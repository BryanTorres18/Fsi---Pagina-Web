<?php
    include('config.php');
    include('session.php');

    $id = $_GET['id_'];
    $sql = "DELETE FROM serviciocliente WHERE ID_SERVICIOCLIENTE = '$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio-Cliente eliminado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio-Cliente no eliminado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>