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

    <div class="team-modal modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true" style="height:100%;">
      <div class="modal-content" style="min-width: 30%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div>
              <div style="margin: 10px 15px;">
                  <section id="EarnestModalSection">
                    <div class="Visitekaart">
                      <div class="Profielfoto">
                        <img id="profiel" src="/img/Team/photoshoot/reduced/Marieke.jpg">
                      </div>
                      <div class="Separator hidden-xs">
                      </div>
                      <div class="Informatie">
                        <h2 id="naam">Marieke Colleman</h2>
                        <dl>
                          <dt>Rol:</dt>
                          <dd id="rol">bestuur, Vera Claythorne in Tien Kleine Negertjes</dd>
                          <dt>Over:</dt>
                          <dd id="over">Ze heeft geleerd altijd de blik omhoog te blijven richten.</dd>
                        </dl>
                      </div>
                    </div>
                    <div style="text-align:center; margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Sluiten</button>
                    </div>
                  <section>
              </div>
          </div>
      </div>
    </div>

    <div class="container full content">
      <section>
        <h1><?= $translations[4]?></h1>
        <p>
          <?= $translations[27]?>
        </p>
      </section>
      <section id="Team">
        <h2><?= $translations[28]?></h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Hadrien');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Hadrien.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Alberick');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Alberick.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Marieke');">
                <!--<div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>-->
                  <img src="/img/Team/photoshoot/thumbnails/thumb_Marieke.jpg" class="centered portfolio-item-content"/>
                <!--</div>-->
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Aurelien');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Aurelien.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Tem');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Tem.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Peter');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Peter.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Maarten');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Maarten.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Xavier');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Xavier.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Ivana');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Ivana.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Niels');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/photoshoot/thumbnails/thumb_Niels.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Jeffrey');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Jeffrey.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Lies');">
              <img  src="/img/Team/photoshoot/thumbnails/thumb_Lies.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Agata');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/photoshoot/thumbnails/thumb_Agata.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
    rol = { Hadrien:      "<?= $translations[38]?>",
            Alberick:     "<?= $translations[39]?>",
            Marieke:      "<?= $translations[40]?>",
            Aurelien:     "<?= $translations[41]?>",
            Tem:          "<?= $translations[42]?>",
            Tom:          "<?= $translations[43]?>",
            Ben:          "<?= $translations[44]?>",
            Peter:        "<?= $translations[45]?>",
            Maarten:      "<?= $translations[46]?>",
            Matthias:     "<?= $translations[47]?>",
            Xavier:       "<?= $translations[48]?>",
            Ivana:        "<?= $translations[49]?>",
            Niels:        "<?= $translations[50]?>",
            Jeffrey:      "<?= $translations[51]?>",
            Lies:         "<?= $translations[52]?>",
            Agata:        "<?= $translations[53]?>"};
    over = {Hadrien:      "<?= $translations[54]?>",
            Alberick:     "<?= $translations[55]?>",
            Marieke:      "<?= $translations[56]?>",
            Aurelien:     "<?= $translations[57]?>",
            Tem:          "<?= $translations[58]?>",
            Tom:          "<?= $translations[59]?>",
            Ben:          "<?= $translations[60]?>",
            Peter:        "<?= $translations[61]?>",
            Maarten:      "<?= $translations[62]?>",
            Matthias:     "<?= $translations[63]?>",
            Xavier:       "<?= $translations[64]?>",
            Ivana:        "<?= $translations[65]?>",
            Niels:        "<?= $translations[66]?>",
            Jeffrey:      "<?= $translations[67]?>",
            Lies:         "<?= $translations[68]?>",
            Agata:        "<?= $translations[69]?>"};
    showEarnest = function(name){
      $('#naam').get(0).innerHTML = name;
      $('#rol').get(0).innerHTML = rol[name];
      $('#over').get(0).innerHTML = over[name];
      $('#profiel').attr("src", "/img/Team/photoshoot/reduced/" + name + ".jpg");
    }

    /*$('#portfolioModal').on('hidden.bs.modal', function(){
      $('#profiel'.attr("src", "/img/Team/photshoot//Hadrien.jpg"));
    })*/
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
      $('#navbar-about').addClass("active");
      $('#navbar-about a').attr("href","#");
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
