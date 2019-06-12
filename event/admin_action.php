<?php
require("databaseconnect.php");
session_start();


$db = new dbconnect();

$name = $_GET['user'];

$del = "delete from people where First_name = '$name'";
mysqli_query($db->connection, $del);

header('location:admin.php');

$db->connection->close();
?>