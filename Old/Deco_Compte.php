<?php
session_start();
if ($_SESSION['Connected']!=null) {
    unset($_SESSION['Connected']);
}
header('Location: loginView.html');
?>