<?php
require('header.inc');
?>


<html lang="ru">
<body>
<meta charset="utf-8">
<!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" >Learn English</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Главная</a></li>        
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Материалы
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="articles.php">Статьи</a></li>
          <li><a href="videos.php">Видео</a></li>
          <li><a href="audio.php">Аудио</a></li>
        </ul>
      </li>
      <li><a href="ulinks.php">Полезные ссылки</a></li>  ,
       <li><a href="about.php">О нас</a></li>  ,
        <li><a href="support.php">Обратная связь</a></li>     
      </ul>
    </div>
  </div>
</nav>-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="image1.jpg" alt="Image">
        
      </div>

      <div class="item">
        <img src="image2.png" alt="Image">
        
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    </div>
<div class="container text-center">    
  <h3>Изучение английского языка</h3><br>
  <div class="row">
    <div class="col-sm-4">
       <p>Мы во Вконтакте: </p>
        <div id="vk_groups"></div>
        <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400"}, 166119235);
        </script>
    </div>
    <div class="col-sm-4">
        <p>Мы на YouTube</p> 
     <script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channel="UC0i2Utv1vn7a4WgzhpASPCQ" data-layout="full" data-count="default"></div>
      
         
 <!--   </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>-->
    </div>
  </div>
</div><br>



</body>
</html>

<?php
require('footer.inc');
?>
