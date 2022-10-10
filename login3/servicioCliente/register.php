<?php
    include("config.php");
    include("session.php");

    $id_usuario=$_POST['id_usuario'];
    $id_cliente=$_POST['id_cliente'];
    $monto=$_POST['monto'];

    $sql = "INSERT INTO serviciocliente(ID_USUARIO, ID_CLIENTE, MONTO) VALUES  ('$id_usuario', '$id_cliente', '$monto')";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Nuevo Servico-Cliente registrado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Servico-Cliente no creado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>