<?php
    session_start();
    unset($_SESSION['funcionario']);
    header("location: index.php");
?>