<?php


/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
SESSION_START ()
$_SESSION[‘code’]
  
echo "<img src='script-captchas.php' alt='captchas' />";

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
			<body>
				Veuillez saisir le code de sécurité !
				<br>
				<img src='script-captchas.php' alt='captchas'>
				<br>
				<form method="post" action="">
					<input type="text" name='xcode'>
					<input type="submit" name ="vcode" value ="VALIDER">
				</form>
			</body>
</html>
