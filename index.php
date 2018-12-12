<?php


/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
SESSION_START ()
$_SESSION[‘code’]
  
echo "<img src='script-captchas.php' alt='captchas' />";

?>
