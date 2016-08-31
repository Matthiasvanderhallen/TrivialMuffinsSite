<script>
function setLanguage(lang){
  setCookie("TMLang", lang, 3650);
  location.reload();
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}
<?php
  if(isset($_COOKIE["TMLang"])){
    $language = $_COOKIE["TMLang"];
  }else{
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
    case "fr":
        break;
    case "nl":
        break;
    case "en":
        break;
    default:
        $lang="en";
        break;
    }
    echo "setLanguage('$lang');";
  }

  $sqlitedb = new PDO('sqlite:website.db');
  $translations = $sqlitedb->query("SELECT $language FROM translations")->fetchAll(PDO::FETCH_COLUMN, $language);
 ?>
</script>
