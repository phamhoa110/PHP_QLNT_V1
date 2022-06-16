<?php
    session_start();
    //session_unset("user");
    unset($_SESSION['dangnhap']);
    header("location:index.php");
?>