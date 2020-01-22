<?php
   include('db_connection.php');
   include('db1_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" href="style.css"> 
    <title>Database</title>
   

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

    <ul class="nav navbar-nav navbar=left">
        <li><a href="logout.php">LOGOUT</a></li>
   </ul>

<div class="clearfix">

             <h1>Database Review</h1>
    
             <form action="" method="post">

<h2>Departaments</h2>
 <input type="submit" value="Departament" name="depart" /> <br>

</form>



  
     <?php

if(isset($_POST['depart'])){
 
        $sql = "SELECT dept_no, dept_name FROM departments";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output table header
                echo "<table class='table'><tr><th>Dept No</th><th>Dept Name</th></tr>";    
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["dept_no"]. "</td><td>" . $row["dept_name"] . "</td>" ;    
        }
             echo "</table>";
        } else {
             echo "0 results";
        }

    mysqli_close($conn);

}



if(isset($_POST['emp'])){
    $query = $_POST['idEmp']; 
    
    echo $query;

    $sql = "SELECT  emp_no, dept_no, from_date, to_date  FROM dept_emp where emp_no LIKE '%".$query."%' ";
    $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output table header
        echo "<table class='table'><tr><th>Emp No</th><th>Dept No</th><th>From date</th><th>dept Emp</th></tr>";    
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["emp_no"]. "</td><td>" . $row["dept_no"]. "</td><td>" . $row["from_date"]. "</td><td>" . $row["to_date"] . "</td>" ;
    }
         echo "</table>";
    } else {
         echo "0 results";
    }

mysqli_close($conn);

}


    ?>



    <form action="" method="post">


 <h2>Employees</h2>

 <input type="text" name="idEmp">
 <input type="submit" value="search" name="emp" />
</form>


        </div>
    
</body>
</html>