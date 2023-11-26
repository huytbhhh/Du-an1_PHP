<?php
     
session_start();
include('./global.php');
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($conn, "utf8");
?>