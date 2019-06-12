<html>
<head>
      <title>User and Login registration</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="shortcut icon" href="images/faces.png" type="image/png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <div class="container">
      <div class="login-box">
      <div class ="row">
         <div class="col-md-6 login-center">
            <h2>Admin login</h2>
            <form action="adminvalid.php" method="post">
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="admin" class="form-control" required>

               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="adminpass" class="form-control" required>
                  
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
         </div>
         

      </div>
   </div>
   </div>
</body>

</html>


