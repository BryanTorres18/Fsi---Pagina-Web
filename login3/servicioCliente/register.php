<?php
    include("config.php");
    include("session.php");

    $ID_SERVICIO=$_POST['ID_SERVICIO'];
    $id_cliente=$_POST['id_cliente'];
    $FECHA_ENTREGA=$_POST['FECHA_ENTREGA'];

    $sql = "INSERT INTO serviciocliente(ID_SERVICIO, ID_CLIENTE, FECHA_ENTREGA) VALUES  ('$ID_SERVICIO', '$id_cliente', '$FECHA_ENTREGA')";

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