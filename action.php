<?php
                                                      //  FORMULÁRIOSSS 
if (isset($_POST['peso'])) {

	$peso= $_POST['peso'];
}

 if (isset($_POST['altura'])) {
	$altura= $_POST['altura'];
}

$IMC = $peso /($altura* $altura) ;

echo 'Seu imc é  ' .$IMC;



?>