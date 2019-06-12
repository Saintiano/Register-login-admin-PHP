<?php
require("databaseconnect.php");
session_start();


$db = new dbconnect();
$name = $_POST['admin'];
$pass = $_POST['adminpass'];

$s = " select * from admin where name= '$name' && password= '$pass'";

$result = mysqli_query($db->connection, $s);
$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['username'] = $name;
    header('location:admin.php');
    
}
else{
    header('location:adminlog.php');
}

?>