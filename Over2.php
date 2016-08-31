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
    <link href="/css/starter-template.css" rel="stylesheet">
    <link href="/css/blueimp-gallery.css" rel="stylesheet">
    <link href="/css/thebigpicture.css" rel="stylesheet">
    <link href="/css/navbarcollapse.css" rel="stylesheet">
    <link href="/css/largescreenbackground.css" rel="stylesheet">
    <link href="/css/blueimp-gallery-indicator.css" rel="stylesheet">
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
                        <img id="profiel" src="/img/Team/Marieke.jpg">
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
        <h1>Over Ons</h1>
        <p>
          Trivial Muffins brengt theaterklassiekers in hun oorspronkelijke taal (met Nederlandse ondertitels) en met een rijk decor en realistische kostuums. We willen mensen laten genieten van de grootste werken zoals ze bedoeld zijn.
        </p>
      </section>
      <section id="Team">
        <h2>Team</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Hadrien');">
              <img  src="/img/Team/photoshoot/reduced/Hadrien.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Alberick');">
              <img  src="/img/Team/photoshoot/reduced/Alberick.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Marieke');">
                <!--<div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>-->
                  <img src="/img/Team/photoshoot/reduced/Marieke.jpg" class="centered portfolio-item-content"/>
                <!--</div>-->
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Aurelien');">
              <img  src="/img/Team/photoshoot/reduced/Aurelien.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Tem');">
              <img  src="/img/Team/photoshoot/reduced/Tem.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Tom');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/Tom.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Peter');">
              <img  src="/img/Team/photoshoot/reduced/Peter.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Maarten');">
              <img  src="/img/Team/photoshoot/reduced/Maarten.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Matthias');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/Matthias.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Xavier');">
              <img  src="/img/Team/photoshoot/reduced/Xavier.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Ivana');">
              <img  src="/img/Team/photoshoot/reduced/Ivana.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Niels');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/photoshoot/reduced/Niels.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Jeffrey');">
              <img  src="/img/Team/photoshoot/reduced/Jeffrey.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
            <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Lies');">
              <img  src="/img/Team/photoshoot/reduced/Lies.jpg" class="centered portfolio-item-content"/>
            </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 centering">
              <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" onclick="showEarnest('Agata');">
                <div class="portfolio-item">
                  <div class="portfolio-item-overlay"></div>
                  <img src="/img/Team/photoshoot/reduced/Agata.jpg" class="centered portfolio-item-content"/>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script>
    rol = { Hadrien: "Voorzitter, Philip Lombard in Tien Kleine Negertjes",
            Alberick: "Bestuur, regisseur van Tien Kleine Negertjes",
            Marieke: "Bestuur, Vera Claythorne in Tien Kleine Negertjes",
            Aurelien: "Administratieve hulp",
            Tem: "Hoofd kostuumontwerp",
            Tom: "Hoofd decorontwerp, technieker",
            Ben: "William Blore in And Then There Were None",
            Peter: "Dr. Armstrong in And Then There Were None",
            Maarten: "Judge Wargrave in And Then There Were None",
            Matthias: "Hoofdtechnieker",
            Xavier: "Decorontwerper, technieker",
            Ivana: "Emily Brent in And Then There Were None",
            Niels: "Thomas Rogers in And Then There Were None",
            Jeffrey: "General Mackenzie in And Then There Were None",
            Lies: "Hoofd Grime",
            Agata: "Promo & Communicatie"};
    over = { Hadrien: "Het is allemaal door zijn gebrek aan realisme dat we zo ver zijn geraakt.",
             Alberick: "Zijn straffe woordspelingen zijn vaak gewoon straffen",
             Marieke: "Ze heeft geleerd altijd de blik omhoog te blijven richten.",
             Aurelien: "Hij is als een broer voor ons allemaal.",
             Tem: "We zijn blij als ze lacht en anders doodsbang.",
             Tom: "Hij heeft echt wel goei gerief.",
             Ben: "Hij kan soms hard zijn, maar we halen er veel uit.",
             Peter: "Soms wouden we dat hij minder eerlijk was tegen ons.",
             Maarten: "Onschuld moet je gebruiken in je eigen voordeel.",
             Matthias: "Hij kan zich in elk probleem praten.",
             Xavier: "[Wordt nog onderzocht.]",
             Ivana: "[Wordt nog onderzocht.]",
             Niels: "[Wordt nog onderzocht.]",
             Jeffrey: "[Wordt nog onderzocht.]",
             Lies: "[Wordt nog onderzocht.]",
             Agata: "[Wordt nog onderzocht.]"};

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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/blueimp-helper.js"></script>
    <script src="/js/blueimp-gallery.js"></script>
    <script src="/js/blueimp-gallery-fullscreen.js"></script>
    <script src="/js/blueimp-gallery-indicator.js"></script>
    <script src="/js/jquery.blueimp-gallery.js"></script>
    <script src="/js/modals.js"></script>
		<script src="/js/fixlanguagelink.js"></script>
  </body>
</html>
