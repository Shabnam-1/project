
<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Article</title>
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
                <br>
          
                <li class="nav-item">
                    <a href="databasereview.php" class="nav-link">DATABASE REVIEW</a>
                </li>
                <br>
                <li class="nav-item">
                    <a href="report.php" class="nav-link">REPORT</a>
                </li>
            </ul>
           
        </div>
    </nav>
    <ul class="nav navbar-nav navbar=left">
        <li><a href="logout.php">LOGOUT</a></li>
   </ul>
   <br>


<div class="container">

<h1>List of My Hobbies</h1>
 
 <div class="row">
        <div class="col-sm-4" style="background-color:yellow;">
        <img src="imgs/cook.jpg" alt="Cook" style="width:100%;">
  
        </div>
        <div class="col-sm-4" style="background-color:blue;">
        <img src="imgs/travel.jpg" alt="Travel" style="width:100%;">
      
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
        <img src="imgs/garden.jpg" alt="Garden" style="width:100%;">
          
        </div>
        <br>
        <br>
        <br>
</div>

   
<div class="container">
  <h2>Hobbies</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imgs/ifood.jpg" alt="cook" style="width:100%;" >
        <p>
            <h1>Cooking</h1>
                        <li>
                        Indian food is all about its herbs, spices and their rich aroma, which are very hard to find i
                        n western food in general. Indian food is very easy to cook and this is one vital reason that 
                        makes Indian cooking attractive and hassle-free for any newbie!Indian cuisine differs across the 
                        country’s myriad cultures flourishing across its regions and locations. It also varies seasonally,
                        depending on which fruits or vegetables are available at the time. Therefore, not only the spices 
                        but the various seasonal fruits and vegetables do add that extra flavor to, and liking for Indian food.
                       </li> 
                        <li>
                        The ingredients and the seasonal variances are thus the exotic life-force of Indian food.My attraction towards
                        Indian cooking was also founded on its inborn simplicity. You can literally play with the spices and ingredients
                        and cook a different Indian dish every time; or even by treating each spice a little differently, you can create
                        a completely different taste of the same recipe, which stays on the tip of your tongue! Further, I also came to 
                        erstand that while some of the ingredients are common for both vegetarian and non-vegetarian preparations, some 
                        others are unique to each type of preparation.
                    </li>
                    </p>
      </div>

      <div class="item">
        <img src="imgs/sea.jpg" alt="Travel" style="width:100%;">
        <p>
        <h1>Travelling</h1>
                    <li>
                        Traveling is rejuvenating and fun as well. It enriches your soul. You leave a small part of yourself with the travel 
                        ies and get to learn more about yourself. It may be an addiction to most people and the following reasons make it 
                        certainly the best hobby.Travel in groups or solo teaches you a lot of things. It aids in curving you into a better human.
                        You learn how to interact with different people and know their stories and this impacts you on a greater level.</li>
                        <li>
                         Adventureand traveling also lets you open new chances and possibilities. It may even help in combating your fears in life.
                        This is extremely related to my previous point. We tend to be so caught up in our daily lives that sometimes by simply sticking 
                        around we may cause more harm than good.Traveling more is likely to have a tremendous impact on your mental well-being, especially
                        if you're no used to going out of your comfort zone.</li>
                     </p>
                    
      </div>
    
      <div class="item">
        <img src="imgs/flower.jpg" alt="Garden" style="width:100%;">
        <p>
        <h1>Gardening</h1>
                   <li>
                     Gardening is a great exercise for both the body and the mind. Apart from the obvious weight loss benefits, studies 
                    have proved that gardening decreases the chances of depression, lowers blood pressure and decreases cholesterol levels in blood. Gardening 
                    is also helpful when it comes to stress. It is a hobby that you should concentrate when you’re seeking relaxation and it would surely deliver
                    just that.Gardening is a true form of art.</li>
                    <li>
                    What’s really intriguing about it as a hobby is that the possibilities are truly endless. The more 
                    you hone your skills the more options you’ll have to play around with.Gardening teaches patience. Plants take a relatively long time to grow.
                    Watching your plants growing teaches patience. I started gardening as a hobby. It has brought a lot of difference in me
                    and made me a better person for sure.</li>
                    </p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>

</html>