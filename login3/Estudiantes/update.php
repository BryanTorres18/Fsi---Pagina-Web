<?php
    include("config.php");
    include("session.php");

    $id = $_POST['id_']; # ID de busqueda
    $id_ = $_POST['id']; # ID de cliente
    $firstname=$_POST['firstname'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $direction=$_POST['direction'];
    $email=$_POST['email'];

    $sql = "UPDATE estudiantes SET id = '$id_', firstname = '$firstname', last_name = '$last_name', phone = '$phone', direction = '$direction' , email = '$email'
    WHERE firstname = '$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Estudiante Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Estudiante no Modificado");';
        echo 'window.location = "users.php";';
        echo '</script>';
    }
?>