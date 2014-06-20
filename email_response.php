<?php
if (isset($_POST['resp_email'])) {
	$email = $_POST['resp_email'];
	$subject = "Tak for din reservation på Froggy's Café";
	$message = "Vi har modtaget din reservation, og vi har bord klar til dig, som du har ønsket.\n
Skulle der opstå ændringer fra vores side, hører du fra os snarest muligt.\n
Vi glæder os til at se dig.\n
Med venlig hilsen\n
Froggy’s Cafe";

	mail($email, $subject, $message);
}

?>