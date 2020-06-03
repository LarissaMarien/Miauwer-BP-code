<?php

$htmlKatten = "<h3>$titel</h3><div class='overzichtsboxfilter'>";
while ($kat = $alleKatten->fetchObject()) {

		$htmlKatten .= "
			<a class='overzichtbekijk' href='index.php?pagina=$pagina&amp;actie=bekijk&amp;id=$kat->id' class='actie'>
				<article class='overzichtenkelbox'>
							<div class='fotoasielkat' style='background-image: url(assets/images/$kat->foto)'></div>

				<div class='gegevensboxoverzicht'>
					<p class='gegevens-naam'>$kat->voornaam</p>
					<p class='gegevens-jaar'>$kat->leeftijd jaar</p>";

					if($kat->geslacht==="kattin"){
		        $htmlKatten .=  "<img id='geslachtkattin' class='gegevens-geslacht' src='assets/icons/kattin-icon.png' alt='geslacht' class='geslachticon'>";
		      } else {
		        $htmlKatten .=  "  <img id='geslachtkater' class='gegevens-geslacht' src='assets/icons/kater-icon.png' alt='geslacht' class='geslachticon'>";
		      }

		      $htmlKatten .= "</div>

				</article>
			</a>";
};

return "</div>



<nav class='navbar'>
	<a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
	<a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
	<a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
	<a href='index.php?pagina=swipen'><i class='icon swipe-icon'></i>swipe</a>
	<a href='index.php?pagina=liked'><i class='icon liked-icon'></i>liked</a>
</nav>

	<div class='filterbox'>
	    <a id='terugnaaroverzicht' href='index.php?pagina=overzicht' class='actie'>terug naar alle katten</a>
	</div>"

		. $htmlKatten

;
?>
