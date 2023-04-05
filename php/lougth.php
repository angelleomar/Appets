<?php
session_start();
if(isset($_SESSION)){
    session_destroy();
    header('location:/php/login.php');
    exit();
}
?>