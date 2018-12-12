<?php
session_start();
if(isset($_POST['captcha'])){
    if($_POST['captcha']==$_SESSION['code']){
        echo "Code correct";
    }
	if($_POST['captcha']!=$_SESSION['code']){
        echo "Code incorrect";
    }
}
header( 'content-type: text/html; charset=utf-8' );
?>

<html>
	<head>
		<meta name="viewport"content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet"href="index.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
			<body>
				<div class="text">Veuillez saisir le code de sécurité !
					<br>
					<img src='script-captchas.php' alt='captcha'>
					<br>
					<form method="post" action="index.php">
						<input type="text" name="captcha">
						<input type="submit" name ="captcha" value ="VALIDER">
					</form>
				</div>
			</body>
			
			<div class="night">
				<div class="shooting_star"></div>
				<div class="shooting_star"></div>
				<div class="shooting_star"></div>
				<div class="shooting_star"></div>
			</div>
</html>
