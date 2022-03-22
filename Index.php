<?php 
include '../Bootstrap/header.php';
include '../Bootstrap/prova.php';
session_start();
include("DB_create.php");
?>
<html>
<head>  
  <title> Cinema Galleria </title>
<link rel="stylesheet" type="text/css" href="../FileCss/header.css">
</style>
</head>
<body>
<center> 
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../interstellar1.jpg"/></svg>       
 <div class="container">
          <div class="carousel-caption text-start">
            <h1>Interstellar:</h1>
            <p>Durante una tempesta Joseph Cooper ex ingegnere della Nasa e la figlia Murph si imbattono in un curioso fenomeno fisico toccherÃ  a Cooper tentare un viaggio estremo per risolvere la Teoria del tutto e salvare l umanitÃ 
</p>
            <p><a class="btn btn-lg btn-primary" href="#">Read more.</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../stowaway.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1><b>Stowaway:</b></h1>
            <p>Un team di astronauti in viaggio verso Marte scopre un clandestino a bordo poco dopo il decollo, ma sono giÃ  troppo lontani per pensare di poter tornare indietro.
</p>
            <p><a class="btn btn-lg btn-primary" href="#">Read more.</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../miyo.jpg"/><</svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Miyo - Un amore felino:</h1>
            <p>Miyo Ã¨ una studentessa del secondo anno delle medie che si Ã¨ innamorata di Hinode Kento, un suo compagno di classe che cerca di evitare in ogni modo le sue sempre piÃ¹ insistenti e stravaganti avance
</p>
            <p><a class="btn btn-lg btn-primary" href="#">Read more.</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<form action="Film.php" method="POST" class="login-email">
<div class="form-group">
<label for="exampleInputEmail1" class="form-label mt-4" ><h1>Che genere di film ti interessa?</label></h1></div>
<div class="bootstrap-select-wrapper">
<select name="genere" title="Scegli una opzione" data-live-search="true" data-live-search-placeholder="Cerca opzioni">
  <option value="Fantascienza">Fantascienza</option>
  <option value="Horror">Horror</option>
  <option value="Romantico">Romantico</option>
  <option value="Anime">Anime</option>
  <option value="Comico">Comico</option>
  <option value="Drammatico">Drammatico</option>
  <option value="Avventura">Avventura</option>
</select> <button name="submit" class="btn btn-primary" href="Film.php"> Cerca</button> <br>
</div>
  <div class="form-group" align="center">
      </div>
      <br>
</form>
</center>
<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>