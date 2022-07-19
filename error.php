<?php
session_start();
if ($_SESSION['error']){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
    header('Refresh: 10; login.php');
}
?>