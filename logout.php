<?php
    session_start();

    if (isset($_SESSION['fname'])){
        session_destroy();
        header('Location: login.php');
    }
?>