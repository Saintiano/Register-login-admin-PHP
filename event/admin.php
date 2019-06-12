<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>


li{
    background-color: white;
    font-size: 150%;
    font-family: "Helvetica";

}

table {
    margin-left:auto; 
    margin-right:auto;
  }

div{
    background-color: white;
    width: 620px;
    margin-left:auto; 
    margin-right:auto;
    border-style: solid;
    border-width: medium;
    border-color: lightgrey;
}

#but{
    
    margin-left:auto; 
    margin-right:auto;
}


</style>
</head>
<body>

<form action="admin_action.php" method="get">
   name: <input type="text" name="user"><br>
  
  <input type="submit" value="Delete member">
</form>

<?php
require("databaseconnect.php");

session_start();

if(!isset($_SESSION['username'])){
    header('location:adminlog.php');
}

$db = new dbconnect();

$s = " select First_name, Last_name, Password, Email, Phone_Number, Country, Program from people ";


$result = mysqli_query($db->connection, $s);
$num = mysqli_num_rows($result);


if ($result->num_rows > 0) {
   
    
    while($row = $result->fetch_assoc()) {
        echo "<div><li>" . $row["First_name"]. " || " . $row["Last_name"]. " || " . $row["Password"]. " || " . $row["Email"]. " || " . $row["Phone_Number"]. " || "  . $row["Country"]. " || " . $row["Program"]. "</li></div>";
    }
 
} else {
    echo "0 results";
}



?>

<button id="but" type="button" class="btn btn-danger"><a class="float-right" href="logoutadmin.php"> Logout </a></button>

</body>
</html>

