<?php
//
session_start();
include 'db_connection.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") 
//if(isset($_POST['login_button']))
{
$username= $_POST['username'];
$pass= $_POST['password'];
$sql = "SELECT * FROM login WHERE username='$username' && password='$pass'";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
      $_SESSION['login_user'] = $row['username'];
      header('Location: success.html');
      header('Location: index.php');
     } else {
      $error = "Your Login Name or Password is invalid";
    }
  
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/ionicons.min.css">
    <link rel="stylesheet" href="./css/Login-Form-Clean.css">
    <link rel="stylesheet" href="./css/styles.css"> -->
    <link rel ="stylesheet" type="text/css" href="app.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
</head>
<body>


    <div class="login-clean">
    <form method="post">
       <div class="row">
            <h2 class="col -md-12">Login Here</h2>
            <form action ="validation.php" method="post">
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group"><input class="form-control" type="test" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
           
    </div>
    
</form>

</body>
</html>
