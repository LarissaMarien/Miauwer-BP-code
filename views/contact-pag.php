<?php

$output = "

<nav class='navbar'>
  <a href='index.php?pagina=profiel'><i class='icon profile-icon'></i>profiel</a>
  <a href='index.php?pagina=info'><i class='icon info-icon'></i>info</a>
  <a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
  <a></a>
  <a href='javascript:history.back()'><i class='icon terug-icon'></i>terug</a>
</nav>
";

$output .= "
    <h3>Regel een date met</h3>
    <p class='gegevens-naam'>$kat->voornaam</p>
    <a href='index.php?pagina=liked&amp;actie=bekijk&amp;id=$kat->id' class='actie'>
      <div class='fotoasielkatcontact' style='background-image: url(assets/images/$kat->foto)'>
        <p class='detailknopcontact' href='index.php?pagina=liked&amp;actie=bekijk&amp;id=$kat->id' class='actie'>details </p>
      </div>
    </a>
    <div class='gegevensboxcontact'>
      <p class='gegevens-jaar'>$kat->leeftijd jaar</p>
      <p class='gegevens-asiel'>$kat->naamasiel</p>
    ";

        if($kat->geslacht==="kattin"){
          $output .=  "<img class='gegevens-geslacht' src='assets/icons/kattin-icon.png' alt='geslacht' class='geslachticon'>";
        } else {
          $output .=  "<img class='gegevens-geslacht' src='assets/icons/kater-icon.png' alt='geslacht' class='geslachticon'>";
        }

    $output .=  "</div>
    <div class='contactknoppen'>
      <a href='tel:$kat->telasiel' class='contactknopgrid'>
        <p>Bel het asiel<span class='telefoonzichtbaar'>: +32$kat->telasiel</span></p>
        <i class='contacticon bel-icon'></i>
      </a>
      <a href='mailto:$kat->mailasiel?subject=Ik wil een date met $kat->voornaam van Miauwer&body=Hallo ik ben $gebruiker->voornaam $gebruiker->naam!%0D%0DIk heb interesse in $kat->voornaam.%0DIk heb $kat->voornaam gevonden op Miauwer.%0DGraag kom ik een keertje langs om Kato te ontmoeten en te kijken of het klikt!%0D%0DDit is mijn profiel:%0DVoornaam: $gebruiker->voornaam%0DAchternaam: $gebruiker->naam%0DGeboortedatum: $gebruiker->gebdatum%0DE-mail: $gebruiker->email%0DBeroep: $gebruiker->beroep%0DAantal gezinsleden in mijn gezin: $gebruiker->gezinsleden%0DAantal kinderen (jonger dan 12 jaar) in mijn gezin: $gebruiker->kinderen%0DIemand allergisch voor katten in mijn gezin? "; if($gebruiker->allergisch==1){
        $output .=  "Ja";
      } else {
        $output .=  "Nee";
      }$output .="%0DMijn woning is een: $gebruiker->woning%0DEen tuin? $gebruiker->tuin%0DWaar woon ik? $gebruiker->omgeving%0DWaar mijn toekomstige kat zal verblijven: $gebruiker->verblijf%0DHeb ik al katten gehad? "; if($gebruiker->kattengehad==1){
        $output .=  "Ja";
      } else {
        $output .=  "Nee";
      }$output .="%0DIk heb momenteel $gebruiker->aantalkatten katten%0DIk heb momenteel $gebruiker->aantalhonden honden%0DIk heb momenteel $gebruiker->aantalandere andere huisdieren%0D%0DGroetjes $gebruiker->voornaam' class='contactknopgrid'>
        <p>Mail asiel</p>
        <i class='contacticon mail-icon'></i>
      </a>
      <a href='$kat->websiteasiel' target='_blank' class='contactknopgrid'>
        <p>Website van het asiel</p>
        <i class='contacticon site-icon'></i>
      </a>
    </div>
    <div class='infoknopgrid'>
      <a class='infopaglink' href='index.php?pagina=info'>Een kat gevonden wat nu?</a>
      <i class='infolink-icon'></i>
    </div>
    ";

return $output;
?>
