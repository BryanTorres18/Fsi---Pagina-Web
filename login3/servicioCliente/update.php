<?php
    include("config.php");
    include("session.php");

    $ID_SERVICIOCLIENTE = $_POST['id_']; # ID de busqueda
    $ID_SERVICIOCLIENTE_ = $_POST['ID_SERVICIOCLIENTE']; # ID de cliente
    $ID_USUARIO=$_POST['ID_USUARIO'];
    $ID_CLIENTE=$_POST['ID_CLIENTE'];
    $MONTO=$_POST['MONTO'];
    $FECHA_HORA=$_POST['FECHA_HORA'];

    $sql = "UPDATE serviciocliente SET 'ID_SERVICIOCLIENTE' = '$ID_SERVICIOCLIENTE_', 'ID_USUARIO' = '$ID_USUARIO', 'ID_CLIENTE' = '$ID_CLIENTE',
    'MONTO' = '$MONTO' , 'FECHA_HORA' = '$FECHA_HORA' WHERE 'ID_SERVICIOCLIENTE' = '$ID_SERVICIOCLIENTE'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio-Cliente Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Servicio-Cliente no Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
?>