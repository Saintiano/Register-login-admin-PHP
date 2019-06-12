<?php
require("databaseconnect.php");


session_start();

$database = new dbconnect();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$program = $_POST['program'];

$token = md5($pass);


$selectquery = " select * from people where Password = '$token'";
$result = mysqli_query($database->connection, $selectquery);
$num = mysqli_num_rows($result);

$sel = " select * from people where Email = '$email'";
$res = mysqli_query($database->connection, $sel);
$em = mysqli_num_rows($res);


$quer = " select * from people where Phone_Number = '$phone'";
$qresl = mysqli_query($database->connection, $quer);
$ph = mysqli_num_rows($qresl);
    
    
    if(empty($_POST["fname"]) or empty($_POST["lname"]) or  empty($_POST['password']) or  empty($_POST['email']) or  empty($_POST['phone']) or  empty($_POST['country']) or  empty($_POST['program'])){
        
       echo "please fill the form";
       
    }

    elseif($num== 1)
    {
         echo "Password already taken!";
    }
    
    elseif($em== 1)
    
    {
         echo "Email already taken!";
    }

    elseif($ph==1){

        echo "Phone already taken!";

    }

    else {

       
        $register = "insert into people(First_name, Last_name, Password, Email, Phone_Number, Country, Program) values ('$fname', '$lname', '$token', '$email', '$phone', '$country', '$program')";
        mysqli_query($database->connection, $register);
        echo "Succesful";
    
    }
    


?>