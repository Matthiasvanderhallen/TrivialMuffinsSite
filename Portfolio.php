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
    <link href="/css/coverflow/coverflow.css" rel="stylesheet">
    <link href="/css/coverflow/coverflow-TM.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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

    <div class="team-modal modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true" style="width: 66%; height: 90%; margin-left: auto; margin-right: auto;margin-top: auto; margin-bottom:auto;">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div>

              <div style="text-align:center; margin-bottom: 10px; margin-top: 10px;">
                <a onclick="jump(-1);"><i class="fa fa-3x fa-chevron-left"></i></a>
                <img id="modalImage" src="/img/Earnest/Being_earnest-0483.jpg" width="80%"/>
                <a onclick="jump(1);"><i class="fa fa-3x fa-chevron-right"></i></a>
                <br>
                <button type="button" style="margin-top: 10px" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Sluiten</button>
              </div>
            </div>
        </div>
    </div>

    <div class="container full content">
        <div class="Viewport-wrapper">
	  <h3>The importance of being Earnest - 2015</h3>
          <img src="/img/Earnest/Being_earnest-0712.jpg" id="Viewport-picture">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Q2-1Dobp9cY" frameborder="0" allowfullscreen id="Viewport-video"></iframe>
        </div>
        <div class="row">
          <div class="col-md-12 ui-coverflow-wrapper ui-clearfix">
            <div id="coverflow" class="wrapper ui-coverflow ui-coverflow-3d-render"> <!-- class="wrapper ui-coverflow ui-coverflow-3d-render">-->
              <div class="coverflow-image-wrapper" data-target="video" data-source="https://www.youtube.com/embed/Q2-1Dobp9cY?cc_load_policy=1"><img src="/img/Earnest/stillplay.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0712.jpg"><img src="/img/Earnest/Being_earnest-0712.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0483.jpg"><img src="/img/Earnest/Being_earnest-0483.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0484.jpg"><img src="/img/Earnest/Being_earnest-0484.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0487.jpg"><img src="/img/Earnest/Being_earnest-0487.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0490.jpg"><img src="/img/Earnest/Being_earnest-0490.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0503.jpg"><img src="/img/Earnest/Being_earnest-0503.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0507.jpg"><img src="/img/Earnest/Being_earnest-0507.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0532.jpg"><img src="/img/Earnest/Being_earnest-0532.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0590.jpg"><img src="/img/Earnest/Being_earnest-0590.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0606.jpg"><img src="/img/Earnest/Being_earnest-0606.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0642.jpg"><img src="/img/Earnest/Being_earnest-0642.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0653.jpg"><img src="/img/Earnest/Being_earnest-0653.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0662.jpg"><img src="/img/Earnest/Being_earnest-0662.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0681.jpg"><img src="/img/Earnest/Being_earnest-0681.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0712.jpg"><img src="/img/Earnest/Being_earnest-0712.jpg" class="coverflow-image landscape" ></div>
              <div class="coverflow-image-wrapper" data-target="picture" data-source="/img/Earnest/Being_earnest-0744.jpg"><img src="/img/Earnest/Being_earnest-0744.jpg" class="coverflow-image landscape" ></div>
            </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $('#navbar-portfolio').addClass("active");
      $('#navbar-portfolio a').attr("href","#");
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
    <script src="/js/coverflow/coverflow.min.js"></script>
    <script>

    var el = $('#coverflow').coverflow(
      {
        active: 0,
        select: function(event, ui){
          console.log(ui.active[0]);
          disable();
          $('#Viewport-'+$(ui.active[0]).attr('data-target')).css('display','inline');
          $('#Viewport-'+$(ui.active[0]).attr('data-target')).attr('src', $(ui.active[0]).attr('data-source'));

          // if($(ui.active[0]).attr('data-type') == 'video') {
          //   $('#Viewport-picture').css('display', 'none');
          //   $('#Viewport-video').css('display', 'block');
          //   $('#Viewport-video').attr('src', $(ui.active[0]).attr('data-source'));
          // } else {
          //   $('#Viewport-picture').css('display', 'block');
          //   $('#Viewport-video').attr('src', '');
          //   $('#Viewport-video').css('display', 'none');
          //   $('#Viewport-picture').attr('src', ui.active[0].firstChild.src);
          // }
        },
        overlap: 0,
      }
    );

    $('#coverflow').coverflow('select', 0);

    function disable() {
      $('#Viewport-video').css('display','none');
      $('#Viewport-picture').css('display','none');
      $('#Viewport-video').attr('src', '');
      $('#Viewport-picture').attr('src', '');
    }

    $('#coverflow div').click(function() {
        if( ! $(this).hasClass('ui-state-active')){
            return;
        }

        $('#coverflow').coverflow('next');
    });

    $(window).smartresize(function() {
			$coverflow.coverflow();
		});

    </script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
