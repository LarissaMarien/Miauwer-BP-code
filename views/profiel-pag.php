<?php

$output = "
<nav class='navbar'>
  <a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
  <a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
  <a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
  <a href='index.php?pagina=swipen'><i class='icon swipe-icon'></i>swipe</a>
  <a href='index.php?pagina=overzicht'><i class='icon overzicht-icon'></i>overzicht</a>
</nav>
<h3>Jouw Miauwer profiel</h3>

<div class='profielfoto' style='background-image: url(profileimages/$gebruiker->profielfoto)'></div>

<div class='profielknoppen'>
  <a class='profielknop' href='index.php?pagina=$pagina&amp;actie=wijzig&amp;id=$gebruikerId' class='actie'>wijzig je gegevens </a>
  <a class='profielknop' href='index.php?logout=true'>afmelden</a>
</div>

<div class='profielbox'>

<h3>" . $gebruiker->voornaam . " " . $gebruiker->naam . "</h3>
<p>" . $gebruiker->gebdatum ."</p>
<p>" . $gebruiker->email . "</p>
<p>" . $gebruiker->beroep . "</p>
<p>";

if($gebruiker->gezinsleden==1){
  $output .=  $gebruiker->gezinsleden;
  $output .=  ' gezinslid';
} else if ($gebruiker->gezinsleden==6) {
  $output .=  'Meer dan 5 gezinsleden';
} else {
  $output .=  $gebruiker->gezinsleden;
  $output .=  ' gezinsleden';
}

$output .= "</p><p>";

if($gebruiker->kinderen==0){
  $output .=  'Geen kinderen';
} else if ($gebruiker->kinderen==1){
  $output .=  $gebruiker->kinderen;
  $output .=  ' kind';
} else if ($gebruiker->kinderen==6){
  $output .=  'Meer dan 5 kinderen';
} else {
  $output .=  $gebruiker->kinderen;
  $output .=  ' kinderen';
}

$output .= "</p><p>";

if($gebruiker->allergisch==1){
  $output .=  'Ja, er is iemand allergisch.';
}
else {
  $output .=  'Nee, er is niemand allergisch.';
}

$output .= "
<h4>Over je woonsituatie</h4>
<p>" . $gebruiker->woning . "</p>
<p>" . $gebruiker->tuin . "</p>
<p>" . $gebruiker->omgeving . "</p>
<p>Je toekomstige kat zal " . $gebruiker->verblijf . " verblijven</p>";

$output .= "
<h4>Over je huisdieren</h4>
<p>";

if($gebruiker->kattengehad==1){
  $output .=  'Ja, al katten gehad.';
}
else {
  $output .=  'Nee, nog geen katten gehad.';
}

$output .= "</p><p>";

if($gebruiker->aantalkatten==0){
  $output .=  'Momenteel geen katten';
} else if ($gebruiker->aantalkatten==1){
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalkatten;
  $output .=  ' kat';
} else if ($gebruiker->aantalkatten==6){
  $output .=  'Momenteel meer dan 5 katten';
} else {
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalkatten;
  $output .=  ' katten';
}

$output .= "</p><p>";

if($gebruiker->aantalhonden==0){
  $output .=  'Momenteel geen honden';
} else if ($gebruiker->aantalhonden==1){
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalhonden;
  $output .=  ' hond';
} else if ($gebruiker->aantalhonden==6){
  $output .=  'Momenteel meer dan 5 honden';
} else {
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalhonden;
  $output .=  ' honden';
}

$output .= "</p><p>";

if($gebruiker->aantalandere==0){
  $output .=  'Momenteel geen andere huisdieren';
}
else if ($gebruiker->aantalandere==1){
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalandere;
  $output .=  ' andere huisdier';
} else if ($gebruiker->aantalandere==6){
  $output .=  'Momenteel meer dan 5 andere huisdieren';
} else {
  $output .=  'Momenteel ';
  $output .=  $gebruiker->aantalandere;
  $output .=  ' andere huisdieren';
}

$output .= "</p></div>";

return $output

?>
