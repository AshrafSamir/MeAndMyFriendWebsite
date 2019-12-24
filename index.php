<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<link href="http://myfonts.us/td-NWKm7T?family=HeadlinerNo.45" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<link rel="stylesheet" href="project.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">   

<title>OAM</title>   
</head>
<body>
  <div class="THEOAM navv"> 

      <li class="nav-item dropdown">
        <a class="dropdown-toggle logout3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php  echo $_SESSION['username']  ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <button class="dropdown-item" href="#" btn btn-outline-info></button>
          <a class="dropdown-item" href="index.php?logout='1'" style="color:black;">Log Out</a>
  </div>

      </li> 

       <nav class="navbar navbar-expand-lg navbar-link bg-link navv2">
  <img class="heading-image" src="others/AMO.png" alt="OAM" href="project html.php"> 
  <button class="navbar-toggler navbar navbar-dark bg-#003087" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONTENT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <button class="dropdown-item" href="#" btn btn-outline-info></button>
          <a class="dropdown-item" href="#G-S3">SERIES</a>
          <a class="dropdown-item" href="#G-G3">GAMES</a>
          <a class="dropdown-item" href="#ri">RIGHTS</a>
        </div>
      </li>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#auu">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#CU2">CONTACT US</a>
      </li>
    
    </ul>
  </div>
</nav>


 

<div class="Wel">
<h1 class="Wel2">
  Welcome to OAM website
</h1>
<p class="Wel3">
  We hope to love and buy our games,series and take some entertainment,
  Have fun!
</p>
</div>
</div>
<center>
<div id="carouselExampleIndicators" class="carousel slide myslider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 imgg" src="Slider/RDR.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>Red Dead Redemption</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgg" src="Slider/GOT.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block">
    <h5>Game of Thrones</h5>
  </div>
   </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgg" src="Slider/TLOU.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>The Last of Us</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgg" src="Slider/VIKINGS.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>Vikings</h5>
 
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgg" src="Slider/UNCHARTED.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>Uncharted</h5>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>

<div class="G-S">
<h4 class="G-S2" id="G-S3">GREAT SERIES</h4>   
<div class="swrp">  
<div class="swrch">
<img src="series/BB.jpg">
<h5>Breaking Bad</h5>
<a href="https://egy.best/series/breaking-bad-2008/"> <button class="bu">WATCH NOW</button> </a>         
</div>                    
<div class="swrch">
<img src="series/ST.jpg">  
<h5>Stranger Things</h5>
<a href="https://egy.best/series/stranger-things-2016/"> <button class="bu">WATCH NOW</button> </a>
</div>           
<div class="swrch">
<img src="series/PB.jpg">
<h5>Peaky Blinders</h5>
<a href="https://egy.best/series/peaky-blinders/"> <button class="bu">WATCH NOW</button> </a>
</div> 
</div><br>
<div class="swrp">  
<div class="swrch">
<img src="series/TD.jpg">
<h5>True Detective</h5>
<a href="https://egy.best/series/true-detective-2014/"> <button class="bu">WATCH NOW</button> </a>
</div>                    
<div class="swrch">
<img src="series/GOT2.jpg">  
<h5>Game of Thrones</h5>
<a href="https://egy.best/series/game-of-thrones-2011/"> <button class="bu">WATCH NOW</button> </a>
</div>           
<div class="swrch">
<img src="series/LOST.jpg">
<h5>Lost</h5>
<a href="https://egy.best/series/lost-2004-2010/"> <button class="bu">WATCH NOW </button> </a>

</div> 
</div> <br>
<div class="swrp">  
<div class="swrch">
<img src="series/TWD.png">
<h5>The Walking Dead</h5>
<a href="https://egy.best/series/the-walking-dead/"> <button class="bu">WATCH NOW</button> </a>
</div>                    
<div class="swrch">
<img src="series/13RW.jpg">  
<h5>13 Reasons Why</h5>
<a href="https://egy.best/series/13-reasons-why-2016/"> <button class="bu">WATCH NOW</button> </a>
</div>           
<div class="swrch">
<img src="series/LCDP.jpg">
<h5>La Casa De Papel</h5>
<a href="https://egy.best/series/la-casa-de-papel-2017/"> <button class="bu">WATCH NOW</button> </a>
</div> 
</div> <br>               
</div>    
<center>
<div class="OAM1" id="auu">
<h1 class="OAM2">
  OAM Series
</h1>
<p class="OAM3">
Welcome to OAM.com | OAM.COM, the only official source for OAM series. OAM Series are best known for the excellent BluRay quality at small file-size, which can be downloaded fast for free. OAM Series are encoded using x264 codec and MP4 container for best compatibility with all devices, so all users around the world can download OAM torrents and enjoy the Series.
</p>
</div>
</center>




<div class="G-G">
<h4 class="G-G2" id="G-G3">GREAT GAMES</h4>   
<div class="swrp"> 

<div class="swrch">
<img src="games/battlefieldv.jpg">
<h5>Battlefield V</h5>
<a href="https://www.playstation.com/en-us/games/battlefield-v-ps4/"> <button class="bu">Pre-Order</button></a>         
</div>  

<div class="swrch">
<img src="games/FIFA19.jpg">  
<h5>FIFA 19</h5>
<a href="https://www.playstation.com/en-us/games/fifa-19-ps4/"> <button class="bu">Pre-Order</button></a>
</div>

<div class="swrch">
<img src="games/GOW4.jpg">
<h5>God of War 4</h5>
<a href="https://www.playstation.com/en-us/games/god-of-war-ps4/"> <button class="bu">BUY NOW</button></a>
</div> 

</div><br>

<div class="swrp">  
<div class="swrch">
<img src="games/PUBG.jpg">
<h5>PUPG</h5>
<a href="https://store.steampowered.com/app/578080/PLAYERUNKNOWNS_BATTLEGROUNDS/"> <button class="bu">BUY NOW</button></a>
</div>  

<div class="swrch">
<img src="games/UNCHARTED4.jpg">  
<h5>Uncharted 4</h5>
<a href="https://www.playstation.com/en-us/games/uncharted-4-a-thiefs-end-ps4/"> <button class="bu">BUY NOW</button></a>
</div> 

<div class="swrch">
<img src="games/TheWitcher3.jpg">
<h5>The Witcher 3</h5>
<a href="https://www.playstation.com/en-us/games/the-witcher-3-wild-hunt-ps4/"> <button class="bu">BUY NOW</button></a>
</div> 

</div> <br>

<div class="swrp">  
<div class="swrch">
<img src="games/RDR2.jpg">
<h5>Red Dead Redemption 2</h5>
<a href="https://www.playstation.com/en-us/games/red-dead-redemption-2-ps4/"> <button class="bu">Pre-Order</button></a>
</div>  

<div class="swrch">
<img src="games/TLOU2.png">  
<h5>The Last of Us II</h5>
<a href="https://www.playstation.com/en-us/games/the-last-of-us-part-ii-ps4/"> <button class="bu">Pre-Order</button></a>
</div> 

<div class="swrch">
<img src="games/MSM.jpg">
<h5>Marvel's Spider-Man</h5>
<a href="https://www.playstation.com/en-us/games/marvels-spider-man-ps4/"> <button class="bu">Pre-Order</button></a>
</div> 

</div> <br>

</div>    
  <center>
<div class="OAM4" >
<h1 class="OAM2">
  OAM Games
</h1>
<p class="OAM3" >
Welcome to OAM.com | OAM.COM, the only official source for OAM games. OAM Games are best known for the excellent  games in this world in PS,XBOX and PC, which can be downloaded fast. so all users around the world can download OAM torrents and enjoy the Games.
</p>
</div>
</center>

<center>
<div class="CU" id="CU2">
<form>
<div class="form-group">
<h2>CONTACT US</h2>
<input type="name" class="form-control CU3" placeholder="Enter your UserName">  
</div>
<div class="form-group">
<textarea class="form-control CU3" placeholder="Enter your message" rows="5" cols="30"></textarea>
</div>
<button class="bu2">Send</button>
</form>
</div>
</center>


<center>
<div class="aboutus" id="ri">
<br><p class="re"><i class="fas fa-american-sign-language-interpreting fa"></i>All rights reserved. All trademarks are property of their respective owners in the US and other countries.
<br>VAT included in all prices where applicable. </p>
<a class="re" href="#" target="_blank" rel="noreferrer">Privacy Policy</a>
&nbsp; | &nbsp;
<a class="re" href="#" target="_blank" rel="noreferrer">Legal</a>
&nbsp; | &nbsp;
<a class="re" href="#" target="_blank" rel="noreferrer">OAM Subscriber Agreement</a>
&nbsp; | &nbsp;
<a class="re" href="#" target="_blank" rel="noreferrer">Refunds</a>


<div class="swrp2">
<div class="swrch2">
<i class="fab fa-facebook-square"></i>
</div>
            
            
<div class="swrch2">
<i class="fab fa-twitter-square"></i>
</div>
            
<div class="swrch2">
<i class="fab fa-google-plus-square"></i>
</div>

<div class="swrch2">
<i class="fab fa-instagram"></i>
</div>
            

</div>
</div>
</center>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
