<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Fun, free  boardgame player for English classes. Play any boardgame you find on the net in your online classes or on a screen.">
  <meta name="keywords" content="English boardgame online games teaching lessons Zoom Skype">
  <title>Play Any ESL Boardgame Online</title>
  <link rel="icon" type="image/png" href="favicon.png" ; />
  <link rel="stylesheet" href="./css/styles.css">
  <script src="csi.min.js"></script>
  <script data-ad-client="ca-pub-6192312197226967" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>
  <?php
  // Retrieve the URL variables (using PHP).
  $imgsrc = $_GET['imgsrc'] ? $_GET['imgsrc'] : 'jobs-board.webp';
  $background = $_GET['background'];
  $piecesfile = $_GET['pieces'] ? $_GET['pieces'] : 'heroes.php';
  //Example call: http://localhost:3000/index.php?imgsrc=SnakesBoard.jpg
  ?>


  <div class="nav-bar" id="navbar">
    <a href="index.html" class="nav-bar__logo">
      <svg class="icon-header nav-bar__logo-img">
        <use xlink:href="sprite2.svg#Buho" onclick="scrollUp()">
        </use>
      </svg> </a>
    <h3 class="nav-bar__title">Esl-Ology.Com</h3>
    <div class="nav-bar__title-page">
      <span class="nav-bar__title-page-main" id="pageTitle">BOARDGAME PLAYER</span>
    </div>
    <div class="nav-bar__links">
      <a href="index.html" class="nav-bar__link link3">Home</a>
      <svg viewBox="0 0 100 80" width="40" height="20" onclick="toggler();" id="menu" class="menu">
        <rect width="100" height="12"></rect>
        <rect y="30" width="100" height="12"></rect>
        <rect y="60" width="100" height="12"></rect>
      </svg>
    </div>
  </div>

  <div id="wrapper" class="wrapper" style="background-color:<?php echo $background ?>">

    <div class="sense">
      </style>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXX11XXX9" crossorigin="anonymous"></script>
      <!-- mainpage_top -->
      <ins class="adsbygoogle mainpage_top" style="display:inline-block" data-ad-client="ca-pub-6192312197226967" data-ad-slot="3393588944"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>

    <div class="sidebar-container" id="sidebar">
      <?php include "./sidebar.html" ?>
    </div>

    <div class="introduction">


      <div class="introduction__text">
        <h1>HOW TO PLAY ANY BOARDGAME ONLINE
        </h1>
        <p>
          Teachers and creators have made hundreds of board games to help students practise their English in class. Many of these take the form of PDFs, JGP files or PNGs to print and play and can be found on top sites such as <a href="https://en.islcollective.com/english-esl-worksheets/search/board+game">ISL Collective</a>, <a href="https://busyteacher.org/20378-top-10-print-and-go-games-best-of-busy-teacher.html">Busy Teacher</a> and many others. But what do you do when your class is online? Or if you don't want to waste paper printing? Here is one solution: <br>
          1. Find and download the game you want to play and, if it's a PDF file, take a screen-shot or convert it to a JPG image file with a free converter like the one at <a href="https://pdf2jpg.net/" target="blank" title="PDF to JPG Converter - Convert PDF to JPG">PDF to JPG Converter</a>. If a DOC export it to a PDF in your word-processor and then convert to JPG. <br>
          2. Replace Super Questions by clicking Load Game to open the your game image here. There are pieces you can drag and a six sided dice. Now your Skype/Zoom/Meeting classes will now have one more option! By the way, we collect no information and image files are not uploaded to any server. The images stay on your computer/device. <br>
          3. Finally, if the game comes out the wrong shape, drag it from the bottom right corner to resize for your screen. Happy Playing!
        </p>

      </div>
    </div>

    <div class="contents" style="background-color:<?php echo $background ?>">

    <?php include "./$piecesfile" ?>

      <div class="gamediv" style="background-color:<?php echo $background ?>">
        <div id="board" class="board">



          <div class="imgdiv" id='imgdiv'>
            <div class="pull-tab"></div>
            <input type='file' id="getFile" style="display:none">
            <img id="mypic" src="img/gameboards/<?php echo $imgsrc ?>" alt="gameboard">

          </div>
        </div>
        <div class="dicediv" id="dicediv">
          <div class="dice" id="dice">1</div>
          <button class="roll" id="rolly">ROLL</button>
          <div class="buttondiv">

            <button class="butclass" id="getButton" onclick="document.getElementById('getFile').click()">Load Game</button>
            <button class="butclass" id="chooseButton" onclick="location='boardgame-chooser.php'">Choose Game</button>
            <button class="butclass" id="demoBut" onclick="playDemo();">Play This</button>
            <p class="drag2" id="draggy">Drag pieces to play</p>
          </div>
        </div>

      </div>

      <!-- <div class="gamechoice">
              <a href="http://localhost:3000/index.php?imgsrc=SportsBoardGame.png"><img src="img/SportsBoardGame.png" style="width:100px; height:auto; grid-row:5/6;"alt=""></a>
              <a href="http://localhost:3000/index.php?imgsrc=HalloweenBoardGame.png"><img src="img/HalloweenBoardGame.jpg" style="width:100px; height:auto; grid-row:5/6;"alt=""></a>
              <a href="http://localhost:3000/index.php?imgsrc=SnakesBoard.jpg"><img src="img/SnakesBoard.jpg" style="width:100px; height:auto; grid-row:5/6;"alt=""></a>
        </div> -->


    </div>

    <div class="sense-bottom">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Vertical ad -->
      <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6192312197226967" data-ad-slot="3073690633" data-ad-format="auto" data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>


  </div>
  </div>
  <footer class="footer">
    <div class="footer__copyright" id="footer">
      <p>© 2021 Copyright Esl-ology.com & copyright owners.</p>
      <p>Vectors & images by <a href="https://www.vecteezy.com">Vecteezy</a>&nbsp&nbsp<a href="https://pixabay.com">Pixabay</a>&nbsp&nbsp<a href="https://unsplash.com">Unsplash </a>. Playing piece icons made by <a href="https://icon8.com/" title="Icons8">ICONS8</a> Thanks,guys!</p>
    </div>
  </footer>

  <div class="hidden"><img src="sprite2.svg" style="display: none">
    <script>
      <!--//
      -->
    <![CDATA[//><!--
    var images = new Array();
      function preload(){
        for(i=0; i<preload.arguments.length; i++){
          images[i] = new Image();
          images[i].src = preload.arguments[i];
        }
      }
    preload(
    
    )
      //--><!]]>
    </script>
  </div>

  <script src="./script.js"></script>
</body>

</html>