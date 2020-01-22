<?php
   include('session.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

     <link rel="stylesheet" href="style.css"> 

    <title>My Hobbies</title>
</head>
<body>

        </div>
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
    <div>
    <ul class="nav navbar-nav navbar=left">
        <li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
   

    </div>  

    <section class="container-fluid px-0">
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="imgs/cook.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>COOKING</h2>
                        <p class="lead">  I love to cook indian food. Indian cuisine consists of a wide variety of regional and traditional 
                            cuisines native to the Indian subcontinent.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>GARDENING</h2>
                        <p class="lead">Gardening as hobby brings me in touch with the green plants and flowers. I love to spend 
                            time in nature. 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Fvae8nxzVz4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img src="imgs/travel.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <h2>TRAVELLING</h2>
                        <p class="lead"> I love to travel. When traveling, you inevitably come into contact with people that you might
                             never have met before.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>