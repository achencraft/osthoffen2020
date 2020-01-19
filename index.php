<!DOCTYPE html>
<html>
    <head>
        <title>Osthoffen 2020</title>
        <meta charset="UTF-8">
        <meta name="description" content="Site Internet de la liste municipale Osthoffen 2020">
        <meta name="keywords" content="Osthoffen, elections, municipal, 2020, mairie">
        <meta name="author" content="Lucas LETT">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0&appId=547838122035305&autoLogAppEvents=1"></script>

        <?php include "overall/menu.php";  ?>

        <div class="content">

            <article id="intro">
                
            <h1>Osthoffen 2020, bien vivre ensemble</h1>

            <p>
            Lorem Elsass ipsum Carola blottkopf, Richard Schirmeck eget mollis amet Gal ! tristique elementum so Strasbourg Salu bissame nullam dolor rossbolla merci vielmols kuglopf in,  nüdle dignissim libero, hoplageiss schnaps ornare lacus messti de Bischheim Racing. hopla suspendisse hopla Morbi météor id adipiscing Oberschaeffolsheim Miss Dahlias chambon dui barapli wie porta leo quam, purus kougelhopf non Oberschaeffolsheim wurscht libero. Wurschtsalad sagittis Huguette ullamcorper consectetur schpeck Christkindelsmärik placerat non vulputate turpis, Coopé de Truchtersheim salu lotto-owe tellus ac mamsell condimentum Chulia Roberstau geht's quam. ac risus, Kabinetpapier Spätzle tellus Mauris bissame leo commodo réchime Heineken knepfle Salut bisamme amet, ornare sed rhoncus mänele gewurztraminer ftomi! Gal. Pellentesque baeckeoffe Verdammi tchao bissame s'guelt senectus und libero, jetz gehts los varius munster leverwurscht aliquam semper eleifend habitant sit flammekueche auctor, gravida elit vielmols, sed sit ante DNA, Yo dû. Hans sit knack rucksack ch'ai id, geïz morbi hopla bredele picon bière Chulien hopla kartoffelsalad pellentesque et amet hop Pfourtz ! yeuh. turpis gal schneck
            </p>




            </article>
            
            <article id="infos">
                <h3>Notre Page Facebook</h3>
                <div class="fb-page" data-href="https://www.facebook.com/achencraft/" data-tabs="timeline" data-width="400" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                <br>
                (sera modifié quand la page fb sera ouverte)<br>
                <hr>
                <h3>Compte à rebours</h3>
                
                Temps restant avant le premier tour des élections municipales :
                <div id="countdown"></div> 
            </article>

        </div>
        

    </body>
</html>




<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 15, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("countdown").innerHTML = days + "j " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>