<?php

session_start();

if(!isset($_SESSION['First_name'])){
    header('location:signup.php');
}

?>

<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <div class="container"> 

        

        <a class="float-right" href="logout.php"> Logout </a>
        <h1>Welcome <?php echo $_SESSION['First_name']; ?> </h1>

        </div>
    </body>
</html>