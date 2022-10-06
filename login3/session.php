<?php
    # Incia el programa, en caso de no concuerde con la base de datos lo manda al login
    session_start();
    if(!isset($_SESSION['users']))
    {
        header('Location:index.php');
    }
?>