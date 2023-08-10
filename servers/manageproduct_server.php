<?php
    include_once "database.php";
    $sqlcmd="SELECT * FROM products";
    $selectquery=mysqli_query($connection, $sqlcmd);
?>