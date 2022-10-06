<?php
    include("config.php");
    include("session.php");

    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $birthdate=$_POST['birthdate'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users(firstname, middlename, lastname, birthday, username, password) VALUES ('$firstname', '$middlename', '$lastname', '$birthday', 
    '$username', '$password')";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language = "javascript">';
        echo 'alert("Nuevo Usuario creado");';
        echo 'window.location = "home.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language = "javascript">';
        echo 'alert("Usuario no creado");';
        echo 'window.location = "registration.php";';
        echo '</script>';
    }
?>