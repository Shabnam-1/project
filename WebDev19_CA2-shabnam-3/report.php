<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
     
</head>
<body>
<nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="index.php" class="navbar-brand">MY HOBBIES</a>

      
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="article.php" class="nav-link">ARTICLE</a>
                </li>
                <li class="nav-item">
                    <a href="databasereview.php" class="nav-link">DATABASE REVIEW</a>
                </li>
                <li class="nav-item">
                    <a href="report.php" class="nav-link">REPORT</a>
                </li>
            </ul>
           
        </div>
    </nav>

<br>
<br>
<br>
    <ul class="nav navbar-nav navbar=left">
        <li><a href="logout.php">LOGOUT</a></li>
   </ul>
   <br>
   <br>
<h1> Report</h1>
    <h3>Name: Shabnam Chaudhary</h3>    
    <h3>Student ID: 2019126<h3>  
    <h3>Email address: shabnam.ch.ra@gmail.com</h3>
<br>
<br>
<br>
    
 <h2>Goal of the site</h2>
        <p> 1) This site include the list of my hobbies which are cooking, travel and gardening. 
            and why i choose to those as my hobbies.A hobby is a regular activity done for enjoyment,
            typically during one's leisure time.</P>

         <p> The technology used to make this site are HTML,CSS Javascript,jquery,Bootstrap,PHP which is 
             usually combines with MySQL database,.</P>   

         <p> While builidng this web apllication i learn how to use bootstarp and what are the functionality it 
             it has such as responsive web application. </P>
       
    
</body>
</html>