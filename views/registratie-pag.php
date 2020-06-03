<?php
return "<form class='new' method='post' action='' enctype='multipart/form-data'>
				<div class='inlogkader' id='Div1'>
					<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo'>

					<h1>Hallo nieuwe Miauwer!</h1>
					<p>Maak een miauwer-account aan in een paar stappen en vind de asielkat van je dromen!</p>

							<input for='voornaam' type='text' placeholder='Voornaam' name='voornaam' id='voornaam' required/>
							<input for='naam' type='text' placeholder='Naam' name='naam' id='naam' required/>
							<input for='geboortedatum' type='date' placeholder='Geboortedatum&nbsp;' name='geboortedatum' id='geboortedatum' required/>

							<input id='Buttonvolgende' type='button' value='Volgende' onclick='volgende1();'/>

							<div class='loginlinkkader'>
                <p class='registerlink'>Al een miauwer-account?</p>
                <p class='registerlink'> Log dan <a href='index.php?pagina=login'>hier</a> in!</p>
              </div>

					</div>

					<div class='inlogkader' id='Div2'>
						<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo-kleiner'>
						<h2>Persoonlijke informatie</h2>
		        <label for='beroep'>Wat is je beroep? </label>
		        <input type='text' placeholder='Beroep' name='beroep' id='beroep' required/>
						<label for='gezinsleden'>Hoeveel leden zitten er in je gezin, jezelf meegerekend? </label>
						<div class='selectvraag'>
							<i class='arrow-down'></i>
							<select class='arrowselect' name='gezinsleden' id='gezinsleden' required>
									<option disabled selected value> Aantal gezinsleden </option>
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
							<select name='kinderen' id='kinderen' required>
									<option disabled selected value> Aantal kinderen </option>
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
							<select name='allergisch' id='allergisch' required>
									<option disabled selected value> Allergisch </option>
									<option value='1'>Ja</option>
									<option value='2'>Nee</option>
							</select>
						</div>

							<div class='volgendeterugknoppen'>
	      						<input id='Buttonterug' type='button' value='Terug' onclick='terug1();'/>
	      						<input id='Buttonvolgende' type='button' value='Volgende' onclick='volgende2();'/>
	              </div>
					</div>

					<div class='inlogkader' id='Div3'>
						<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo-kleiner'>
						<h2>Woonsituatie</h2>
						<label for='woning'>In wat voor woning woon je? </label>
						<div class='selectvraag'>
							<i class='arrow-down'></i>
							<select name='woning' id='woning' required>
									<option disabled selected value> Woning </option>
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
							<select name='tuin' id='tuin' required>
									<option disabled selected value> Tuin </option>
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
							<select name='omgeving' id='omgeving' required>
									<option disabled selected value> Omgeving </option>
									<option value='Stad'>Stad</option>
									<option value='Stadsrand'>Stadsrand</option>
									<option value='Platteland'>Platteland</option>
									<option value='Andere'>Andere</option>
							</select>
						</div>
						<label for='verblijf'>Waar zal je toekomstige kat verblijven? </label>
						<div class='selectvraag'>
							<i class='arrow-down'></i>
							<select name='verblijf' id='verblijf' required>
									<option disabled selected value> Verblijf </option>
									<option value='vrij binnen'>Vrij binnen</option>
									<option value='vrij buiten'>Vrij buiten</option>
									<option value='binnen en buiten'>Binnen en buiten</option>
									<option value='in de garage'>In de garage</option>
									<option value='in de stal'>In de stal</option>
									<option value='op een andere plek'>Andere</option>
							</select>
						</div>

							<div class='volgendeterugknoppen'>
									<input id='Buttonterug' type='button' value='Terug' onclick='terug2();'/>
									<input id='Buttonvolgende' type='button' value='Volgende' onclick='volgende3();'/>
							</div>
					</div>

					<div class='inlogkader' id='Div4'>
						<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo-kleiner'>
						<h2>Huisdieren</h2>
						<label for='kattengehad'>Heb je al eerder katten gehad? </label>
						<div class='selectvraag'>
							<i class='arrow-down'></i>
							<select name='kattengehad' id='kattengehad' required>
									<option disabled selected value> Katten gehad </option>
									<option value='1'>Ja</option>
									<option value='2'>Nee</option>
							</select>
						</div>
						<label for='aantalkatten'>Hoeveel katten heb je op dit moment? </label>
						<div class='selectvraag'>
							<i class='arrow-down'></i>
							<select name='aantalkatten' id='aantalkatten' required>
									<option disabled selected value> Aantal katten </option>
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
							<select name='aantalhonden' id='aantalhonden' required>
									<option disabled selected value> Aantal honden </option>
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
							<select name='aantalandere' id='aantalandere' required>
									<option disabled selected value> Aantal andere huisdieren </option>
									<option value='0'>Geen</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>Meer dan 5</option>
							</select>
						</div>

						<div class='volgendeterugknoppen'>
							<input id='Buttonterug' type='button' value='Terug' onclick='terug3();'/>
							<input id='Buttonvolgende' type='button' value='Volgende' onclick='volgende4();'/>
	          </div>
					</div>

					<div class='inlogkader' id='Div5'>
						<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo-kleiner'>

						<h2>Profiel</h2>
						<p>Je bent bijna klaar om je zoektocht te starten!</p>

						<div id='profielfotopreview' class='profielfoto' style='background-image: url(assets/icons/geenprofiel-icon.png)'></div>
							<div class='uploadknopbox'>
							  <button class='uploadknop'>Profielfoto kiezen</button>
								<input id='gekozenbestand' type='file' name='image-data' accept='image/jpeg' onchange='profielfotopreview()' />
							</div>

						<input for='email' type='text' placeholder='Je e-mailadres' name='email' id='email' required/>
		        <input for='paswoord' type='password' placeholder='Wachtwoord' name='paswoord' id='paswoord' required/>

						<div class='volgendeterugknoppen'>
							<input id='Buttonterug' type='button' value='Terug' onclick='terug4();'/>
			        <input type='submit' value='Klaar!' name='nieuwe-gebruiker'/>
	          </div>
					</div>

					<p>
					  <a class='toggle' href='#infopopup'></a>
					</p>

					<div class='toggle-infopopup' id='infopopup'>
						<p>De gegevens die je invult bij het aanmaken van een account worden gebruikt om door te geven aan de asielen.</p>
						<p>Hierdoor kan er meteen kennisgemaakt worden met de mogelijke adoptant(en) en kan voor iedereen de perfecte kat gevonden worden.</p>
					</div>

				</form>

				";
