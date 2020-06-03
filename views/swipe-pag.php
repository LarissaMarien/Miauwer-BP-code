<?php

$output = "
<head>
<script src='https://hammerjs.github.io/dist/hammer.js'></script>
</head>

    <nav class='navbar'>
    <a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
    <a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
    <a class='logoinnav'><i class='logo-icon'></i></a>
    <a href='index.php?pagina=overzicht'><i class='icon overzicht-icon'></i>overzicht</a>
    <a href='index.php?pagina=liked'><i class='icon liked-icon'></i>liked</a>
    </nav>
    <div id='swipepaginaswipe'>
		";

		$output .= "
    <script>
    // Effectief kunnen swipen op swipe-pagina

    var swipepag = document.getElementById('swipepaginaswipe');

    var mc = new Hammer(swipepag);
    </script>

		<article class='swipebox'>
				<a id='bekijk' href='index.php?pagina=$pagina&amp;actie=bekijk&amp;id=$kat->id' class='actie'>
            <div class='fotoasielkatswipe' style='background-image: url(assets/images/$kat->foto)'></div>
        </a>
        <div class='gegevensbox'>
  				<p class='gegevens-naam'>$kat->voornaam</p>
  				<p class='gegevens-jaar'>$kat->leeftijd jaar</p>
          <p class='gegevens-asiel'>$kat->naamasiel</p>

        ";

    				if($kat->geslacht==="kattin"){
    					$output .=  "<p class='gegevens-geslacht' style='background-image: url(assets/icons/kattin-icon.png)'></p>";
    				} else {
    					$output .=  "<p class='gegevens-geslacht' style='background-image: url(assets/icons/kater-icon.png)'></p>";
    				}


        $output .= "
        </div>
        <a class='detailknop' href='index.php?pagina=$pagina&amp;actie=bekijk&amp;id=$kat->id' class='actie'>details</a>
        </article>

        <div class='likebox'>";

            if($kat->id == 1){
              $output .=  "";
            } else {
              $output .=  "<a class='backbutton' href='index.php?pagina=$pagina&amp;actie=terug&amp;id=$kat_back' class='actie'></a>
              <script>
              mc.on('panright tap press', function(ev) {
                location.replace('index.php?pagina=$pagina&actie=terug&id=$kat_back');
              });
              </script>";
            }

            $output .= "



            <form class='like' method='post' action=''>
                <div  class='swipebuttons'>
                <input id='katid' type='hidden' value='$kat->id' name='katid'>
                <input type='hidden' value='" . $_SESSION['gebruiker_id'] . "' name='gebruikerid'>
                <input class='hartje' type='submit' value='' name='like-kat'>
                </div>
            </form>";

            if($kat->id == 23){
              $output .=  "";
            } else {
              $output .=  "<a class='nextbutton' href='index.php?pagina=$pagina&amp;actie=volgende&amp;id=$kat_next' class='actie'></a>
              <script>
              mc.on('panleft tap press', function(ev) {
                location.replace('index.php?pagina=$pagina&actie=volgende&id=$kat_next');
              });
              </script>";
            }

            $output .= "




        </div></div>";




return $output;

 ?>
