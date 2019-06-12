<?php
require("databaseconnect.php");

session_start();

$db = new dbconnect();
$name = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['password'];

$token = md5($pass);

$s = " select * from people where Password= '$token' && First_name = '$name' && Last_name = '$lname'";

$result = mysqli_query($db->connection, $s);
$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['First_name'] = $name;
    header('location:home.php');
    
}
elseif(empty($_POST["fname"]) or empty($_POST["lname"]) or  empty($_POST['password'])){
        
    header('location:signup.php');
    
 }

else{
    header('location:signup.php');
}

?>