<?php
    if (isset($_GET['id'])){

    include_once "config.php";
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($database_connection->query($sql) === TRUE) {
        header("Location: signup.php");
    }else{
        echo "Failed to delete";
    }
    }
?>