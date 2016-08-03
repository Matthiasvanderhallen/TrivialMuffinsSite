<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-padding"></div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-med" href="index.php"><img src="/img/MuffinHome.png"></a>
      <a class="navbar-brand visible-med" href="index.php"><img src="/img/MuffinHomeSmall.png"></a>
      <!--<a class="navbar-brand visible"-->
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li role="navigation" id="navbar-home"><a href="index.php"><?= $translations[0] ?></a></li>
        <li role="navigation" id="navbar-play"><a href="AndThen.php"><?= $translations[1] ?></a></li>
        <li role="navigation" id="navbar-tickets"><a href="Tickets.php"><?= $translations[2] ?></a></li>
        <li role="navigation" id="navbar-portfolio"><a href="Portfolio.php"><?= $translations[3] ?></a></li>
        <li role="navigation" id="navbar-about"><a href="Over.php"><?= $translations[4] ?></a></li>
        <li role="navigation" id="navbar-contact"><a href="Contact.php"><?= $translations[5] ?></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
  <div id="techbar">
    <div class="container" style="line-height:31px;">
      <div class="bar-gutter">
        <ul class="social bar">
          <li id="fb"><a href="https://www.facebook.com/TrivialMuffins" target="_blank"><img src="/img/fb_icon.png" class="icon"></a></li>
          <li id="twitter"><a href="https://www.instagram.com/trivialmuffins/" target="_blank"><img src="/img/instagram_icon_white.png" class="icon"></a></li>
          <li id="instagram"><a href="https://twitter.com/TrivialMuffins" target="_blank"><img src="/img/twitter_icon.png" class="icon"></a></li>
        </ul>
        <div class="bar separator"></div>
        <ul class="lang bar">
          <li id="nl" role="navigation" ><a href="#" onclick="setLanguage('nl');">NL</a></li>
          <li id="fr" role="navigation" ><a href="#" onclick="setLanguage('fr');">FR</a></li>
          <li id="en" role="navigation" ><a href="#" onclick="setLanguage('en');">EN</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
