<?php
return "
<form class='login' method='post' action=''>
		<div class='inlogkader'>
				<img src='assets/Miauwer-Logo.png' alt='Logo miauwer' class='logo'>
				<h1>Hallo Miauwer!</h1>
				<p>Log in en ga verder waar je gebleven was.</p>

					<input for='email' placeholder='Email' type='email' name='email' id='email' required />
				  <input for='paswoord' placeholder='Wachtwoord' type='password' name='paswoord' id='paswoord' required />
				  <input type='submit' value='Inloggen' name='login-gebruiker' />


				<div class='registreerkader'>
          <p class='registerlink'>Nog geen miauwer-account?</p>
          <p class='registerlink'> Maak er dan <a href='index.php?pagina=registratie'>hier</a> een aan!</p>
        </div>
		</div>
</form>
				";
?>
