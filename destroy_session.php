<?php

session_start();

if (!empty($_SESSION['username']) || !empty($_SESSION['password'])) {
    session_destroy();
    header("Location:LogIn.php");
}
?>
