<?php
  $output = "
  <nav class='navbar'>
    <a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
    <a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
    <a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
    <a></a>
    <a href='javascript:history.back()'><i class='icon terug-icon'></i>terug</a>
  </nav>

  <div class='detailbox'>

  <a href='javascript:history.back()'>
      <div class='fotoasielkatswipe' style='background-image: url(assets/images/$kat->foto)'></div>
  </a>

	<h4>Hallo ik ben</h4>
	<div class='detailgegevensbox'>
    <p class='gegevens-naam'>" . $kat->voornaam . "</p>
  	<p class='gegevens-jaar'>Ik ben <span class='leeftijdgetal'>" . $kat->leeftijd . " jaar</span></p>
    ";

        if($kat->geslacht==="kattin"){
          $output .=  "<img id='geslachtkattin' class='gegevens-geslacht' src='assets/icons/kattin-icon.png' alt='geslacht' class='geslachticon'>";
        } else {
          $output .=  "  <img id='geslachtkater' class='gegevens-geslacht' src='assets/icons/kater-icon.png' alt='geslacht' class='geslachticon'>";
        }

        $output .= "</p>

    <p class='gegevens-verblijf'>Ik verblijf nu in </p>
        <a class='gegevens-asiel' target='_blank' href='$kat->websiteasiel'>" . $kat->naamasiel . " </a>
  </div>
  <table >
  	<tbody>
  		<tr>
  			<td>Ik kan om met andere katten</td>
  			<td class='jaofnee'>" . $kat->omgangkatten . "</td>
  		</tr>
  		<tr>
  			<td>Ik kan om met honden</td>
  			<td class='jaofnee'>" . $kat->omganghonden . "</td>
  		</tr>
  		<tr>
  			<td>Ik kan om met kinderen (< 12 jaar)</td>
  			<td class='jaofnee'>" . $kat->omgangkinderen . "</td>
  		</tr>
  		<tr>
  			<td>Ik kan goed alleen zijn</td>
  			<td class='jaofnee'>" . $kat->alleenzijn . "</td>
  		</tr>
  		<tr>
  			<td>Ik ben gewoon om buiten te zijn</td>
  			<td class='jaofnee'>" . $kat->buitenkat . "</td>
  		</tr>
  		<tr>
  			<td>Ik heb een goede gezondheid</td>
  			<td class='jaofnee'>" . $kat->gezondheid . "</td>
  		</tr>
      <tr>
  			<td>Dit weet je best ook:</td>
  		</tr>
  	</tbody>
  </table>

    <p class='beschrijvingkat'>" . $kat->beschrijving . "</p>

  </div>

  ";

  return $output;
?>
