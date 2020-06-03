<?php
	$output = "
	<nav class='navbar'>
	    <a></a>
	    <a></a>
	    <a href='index.php?pagina=swipen' class='logoinnav'><i class='logo-icon'></i></a>
	    <a></a>
	    <a href='javascript:history.back()'><i class='icon terug-icon'></i>terug</a>
	</nav>

	<form class='new' method='post' action='index.php?pagina=$pagina' enctype='multipart/form-data'>

	<input type='hidden' name='id' value='$gebruiker->id' />
	<h3>Jouw profiel wijzigen</h3>

	<div class='inlogkader'>

	<div id='profielfotopreview' class='profielfoto' style='background-image: url(profileimages/$gebruiker->profielfoto)'></div>
		<div class='uploadknopbox'>
			<button class='uploadknop'>Profielfoto veranderen</button>
			<input id='gekozenbestand' type='file' name='image-data' accept='image/jpeg' onchange='profielfotopreview()' />
		</div>

	<input for='voornaam' type='text' placeholder='voornaam'  id='voornaam' name='voornaam' value='" . $gebruiker->voornaam . "'/>
	<input for='naam' type='text' placeholder='naam' name='naam' id='naam' value='" . $gebruiker->naam . "' />
	<input for='geboortedatum' type='date' placeholder='' name='geboortedatum' id='geboortedatum' value='" . $gebruiker->geboortedatum . "' />

	<input for='email' type='text' placeholder='Je e-mailadres' name='email' id='email' value='" . $gebruiker->email . "'/>
	<input for='paswoord' type='password' placeholder='Nieuw wachtwoord' name='paswoord' id='paswoord' value='" . $gebruiker->paswoord . "'/>

	<h3>Persoonlijke informatie</h3>
	<label for='beroep'>Wat is je beroep? </label>
	<input type='text' placeholder='Beroep' name='beroep' id='beroep' value='" . $gebruiker->beroep . "' />

	<label for='gezinsleden'>Hoeveel leden zitten er in je gezin, jezelf meegerekend? </label>
	<div class='selectvraag'>
		<i class='arrow-down'></i>
		<select name='gezinsleden' id='gezinsleden' >
				<option value='$gebruiker->gezinsleden'> ";

				if($gebruiker->gezinsleden==0){
				  $output .=  'Geen';
				} else if ($gebruiker->gezinsleden==6){
				  $output .=  'Meer dan 5 kinderen';
				} else {
				  $output .=  $gebruiker->gezinsleden;
				}

				 $output .= " </option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>Meer dan 5</option>
		</select>
	</div>

	<label for='kinderen'>Hoeveel kinderen (jonger dan 12 jaar) zitten er in je gezin? </label>
	<div class='selectvraag'>
		<i class='arrow-down'></i>
		<select name='kinderen' id='kinderen'>
				<option value= '$gebruiker->kinderen'> ";

				if($gebruiker->kinderen==0){
				  $output .=  'Geen';
				} else if ($gebruiker->kinderen==6){
				  $output .=  'Meer dan 5 kinderen';
				} else {
				  $output .=  $gebruiker->kinderen;
				}

				 $output .= " </option>
				<option value='0'>Geen</option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>Meer dan 5</option>
		</select>
	</div>


	<label for='allergisch'>Ben jij of iemand in je gezin allergisch aan katten? </label>
	<div class='selectvraag'>
		<i class='arrow-down'></i>
		<select name='allergisch' id='allergisch'>
				<option value='$gebruiker->allergisch'> ";

				if($gebruiker->allergisch==1){
				  $output .=  'Ja';
				}
				else {
				  $output .=  'Nee';
				}

				$output .= " </option>
				<option value='1'>Ja</option>
				<option value='2'>Nee</option>
		</select>
	</div>

		<h3>Woonsituatie</h3>
		<label for='woning'>In wat voor woning woon je? </label>
		<div class='selectvraag'>
			<i class='arrow-down'></i>
			<select name='woning' id='woning'>
					<option value='$gebruiker->woning'>" . $gebruiker->woning . "</option>
					<option value='Villa'>Villa</option>
					<option value='Huis'>Huis</option>
					<option value='Appartement'>Appartement</option>
					<option value='Studio'>Studio</option>
					<option value='Andere'>Andere</option>
			</select>
		</div>

		<label for='tuin'>Heb je een tuin? </label>
		<div class='selectvraag'>
			<i class='arrow-down'></i>
			<select name='tuin' id='tuin'>
					<option value='$gebruiker->tuin'>" . $gebruiker->tuin . "</option>
					<option value='Ja, een tuin'>Ja</option>
					<option value='Nee, maar wel een terras'>Nee, maar wel een terras</option>
					<option value='Nee, maar wel een koer'>Nee, maar wel een koer</option>
					<option value='Nee, geen tuin/terras/koer'>Nee</option>
					<option value='Andere'>Andere</option>
			</select>
		</div>

		<label for='omgeving'>In wat voor omgeving woon je? </label>
		<div class='selectvraag'>
			<i class='arrow-down'></i>
			<select name='omgeving' id='omgeving'>
					<option value='$gebruiker->omgeving'> " . $gebruiker->omgeving . " </option>
					<option value='Stad'>Stad</option>
					<option value='Stadsrand'>Stadsrand</option>
					<option value='Platteland'>Platteland</option>
					<option value='Andere'>Andere</option>
			</select>
		</div>

		<label for='verblijf'>Waar zal je toekomstige kat verblijven? </label>
		<div class='selectvraag'>
			<i class='arrow-down'></i>
			<select name='verblijf' id='verblijf' >
					<option value='$gebruiker->verblijf'> " . ucfirst($gebruiker->verblijf) . " </option>
					<option value='vrij binnen'>Vrij binnen</option>
					<option value='vrij buiten'>Vrij buiten</option>
					<option value='binnen en buiten'>Binnen en buiten</option>
					<option value='in de garage'>In de garage</option>
					<option value='in de stal'>In de stal</option>
					<option value='op een andere plek'>Andere</option>
			</select>
		</div>

			<h3>Huisdieren</h3>
			<label for='kattengehad'>Heb je al eerder katten gehad? </label>
			<div class='selectvraag'>
				<i class='arrow-down'></i>
				<select name='kattengehad' id='kattengehad'>
						<option value='$gebruiker->kattengehad' > ";

						if($gebruiker->kattengehad==1){
						  $output .=  'Ja';
						}
						else{
						  $output .=  'Nee';
						}

						$output .= " </option>
						<option value='1'>Ja</option>
						<option value='2'>Nee</option>
				</select>
			</div>

			<label for='aantalkatten'>Hoeveel katten heb je op dit moment? </label>
			<div class='selectvraag'>
				<i class='arrow-down'></i>
				<select name='aantalkatten' id='aantalkatten'>
						<option value='$gebruiker->aantalkatten' > ";

						if($gebruiker->aantalkatten==0){
						  $output .=  'Geen';
						} else if ($gebruiker->aantalkatten==6){
						  $output .=  'Meer dan 5 katten';
						} else {
						  $output .=  $gebruiker->aantalkatten;
						}

						 $output .= " </option>
						<option value='0'>Geen</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>Meer dan 5</option>
				</select>
			</div>

			<label for='aantalhonden'>Hoeveel honden heb je op dit moment? </label>
			<div class='selectvraag'>
				<i class='arrow-down'></i>
				<select name='aantalhonden' id='aantalhonden' >
						<option value='$gebruiker->aantalhonden'> ";

						if($gebruiker->aantalhonden==0){
						  $output .=  'Geen';
						} else if ($gebruiker->aantalhonden==6){
						  $output .=  'Meer dan 5 honden';
						} else {
						  $output .=  $gebruiker->aantalhonden;
						}

						 $output .= " </option>
						<option value='0'>Geen</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>Meer dan 5</option>
				</select>
			</div>

			<label for='aantalandere'>Hoeveel andere huisdieren heb je op dit moment? </label>
			<div class='selectvraag'>
				<i class='arrow-down'></i>
				<select name='aantalandere' id='aantalandere'>
						<option value='$gebruiker->aantalandere'> ";

						if($gebruiker->aantalandere==0){
						  $output .=  'Geen';
						} else if ($gebruiker->aantalandere==6){
						  $output .=  'Meer dan 5 andere huisdieren';
						} else {
						  $output .=  $gebruiker->aantalandere;
						}

						 $output .= " </option>
						<option value='0'>Geen</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>Meer dan 5</option>
				</select>
			</div>
</div>


	<input class='opslaanknop' type='submit' value='profiel opslaan' name='wijzig' />
	</form>

	";
  return $output;
?>
