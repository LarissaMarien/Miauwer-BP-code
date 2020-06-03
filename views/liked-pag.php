<?php

$output = "
<nav class='navbar'>
  <a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
  <a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
  <a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
  <a href='index.php?pagina=swipen'><i class='icon swipe-icon'></i>swipe</a>
  <a href='index.php?pagina=overzicht'><i class='icon overzicht-icon'></i>overzicht</a>
</nav>

<h3>Deze katten vind je leuk!</h3>

";

while ($gebkat = $alleGebkatten->fetchObject()) {

		$output .= "
    <div class='likedbox'>
          <a class='fotovankat' href='index.php?pagina=$pagina&amp;actie=bekijk&amp;id=$gebkat->kat_id' class='actie'>
              <div class='fotoasielkat' style='background-image: url(assets/images/$gebkat->foto)'></div>
          </a>
          <p class='gegevens-naam'>$gebkat->voornaam</p>
          <p class='gegevens-asiel'>$gebkat->naamasiel</p>
          <a class='contactknop' href='index.php?pagina=contact&amp;actie=contact&amp;id=$gebkat->kat_id' class='actie'></a>
          <a class='deleteknop' href='index.php?pagina=$pagina&amp;actie=verwijder&amp;id=$gebkat->kat_id' class='actie'></a>
    </div>
      ";
}

return $output;

?>
