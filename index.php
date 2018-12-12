<?php
session_start();
if(isset($_POST['captcha'])){
    if($_POST['captcha']==$_SESSION['code']){
        echo "Code correct";
    } else {
        echo "Code incorrect";
    }
}

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
			<body>
				Veuillez saisir le code de sécurité !
				<br>
				<img src='script-captchas.php' alt='captcha'>
				<br>
				<form method="post" action="index.php">
					<input type="text" name='captcha'>
					<input type="submit" name ="code" value ="VALIDER">
				</form>
			</body>
</html>
