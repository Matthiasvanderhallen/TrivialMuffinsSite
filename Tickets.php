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
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
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

    <?php include 'navbar.php'; ?>

    <div class="container full content">
      <section id="Ticket">
        <h1><?= $translations[16]?></h1>
        <h2 style="font-variant:small-caps">Begin oktober</h2>
        <p>
          <?= $translations[23]?>
        </p>
        <p>
          <?= $translations[26]?>
        </p>
        <div class="GoogleForm" style="margin-top: 25px; text-align: center">
          <script type="text/javascript">var submitted=false;</script>
          <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"
          onload="if(submitted) {document.getElementById('Confirmation').style.display = 'block';}"></iframe>
          <form action="//trivialmuffins.us12.list-manage.com/subscribe/post?u=6b495c9f944fd0f3a07ef48a5&amp;id=1873fe4b40" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="hidden_iframe" onsubmit="document.getElementById('Confirmation').style.display = 'block';" novalidate>
              <div id="mc_embed_signup_scroll">

          	<input style="width: 300px; color: rgba(0,0,0,0.5);" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
            <input style="color: rgb(22,22,22)" type="submit" value="<?= $translations[24]?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6b495c9f944fd0f3a07ef48a5_1873fe4b40" tabindex="-1" value=""></div>

              </div>
          </form>
          <p id="Confirmation" style="margin-top: 5px; text-align:center;display:none;"><?= $translations[25]?></p>
        </div>
        <!--<iframe src="https://docs.google.com/forms/d/1vUzEv4x2j1AEq-opfoMA__QFo9aXW0pS38-8zo0orlk/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> -->
      </section>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    $('#navbar-tickets').addClass("active");
    $('#navbar-tickets a').attr("href","#");
    </script>
    <script>
      var i = 0;
      $("body").addClass(["t3","t4","t5","t2"][Math.floor(Math.random()*5)]);
      function next(){
        $("body").removeClass();
        $("body").addClass(["t3","t4","t5","t2"][i%5]);
        i++;
      }
    </script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
