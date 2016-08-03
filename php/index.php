<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>Trivial Muffins Theatre Association</title>
    <link rel="shortcut icon" href="/img/favicon_old.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/thebigpicture.css" rel="stylesheet">
    <link href="/css/navbarcollapse.css" rel="stylesheet">
    <link href="/css/largescreenbackground.css" rel="stylesheet">
    <link href="/css/techbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <?php include 'loadTranslations.php'; ?>

  <body id="dummybodyid" data-spy="scroll" data-target="#navbar">

    <?php
     include 'navbar.php';
    ?>

    <div class="container full content">
      <section id="header">
        <img id="headerimage" src="/img/MuffinDefinitief.png"/>
        <h2><?= $translations[6] ?></h2>
      </section>
      <section id="home">
        <h1>Trivial Muffins</h1>
        <p><?= $translations[7] ?></p>
        <!--<p class="lead">Leuven-based Theatre Association.</p>-->
      </section>
      <section id="CurrentShow">
        <h2><?= $translations[8] ?></h2>
        <p><?= $translations[9] ?></p>
        <p><a href="AndThen.html"><?= $translations[10] ?></a></p>
        <p><a href="Tickets.html"><?= $translations[11] ?></a></p>
      </section>
      <section id="">
        <h2><?= $translations[12] ?></h2>
        <p><?= $translations[13] ?></p>
        <p><a href="Portfolio.html"><?= $translations[14] ?></a></p>
        <div class="text-center">
                  <img src="/img/Earnest/Earnest.png" class="centered portfolio-item-content"/>
        </div>
      </section>
      <section>
        <h2>Contact</h2>
        <p><?= $translations[15] ?></a></p>
      </section>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $('#navbar-home').addClass("active");
      $('#navbar-home a').attr("href","#");
    </script>
    <script>
      var i = 0;
      $("body").addClass(["t3","t4","t5","t2"][Math.floor(Math.random()*4)]);
      function next(){
        $("body").removeClass();
        $("body").addClass(["t3","t4","t5","t2"][i%4]);
        i++;
      }
    </script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
