<?php
    include("config.php");
    include("session.php");

    $id_=$_POST['id'];
    $firstname=$_POST['firstname'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    $direction=$_POST['direction'];
    $email=$_POST['email'];

    $sql = "INSERT INTO estudiantes(id ,firstname, last_name, phone, direction, email) VALUES ('$id_', '$firstname', '$last_name', '$phone', '$direction', '$email')";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Nuevo Estudiante creado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Estudiante no creado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>