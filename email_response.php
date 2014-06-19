<?php
if (isset($_POST['resp_email'])) {
	$email = $_POST['resp_email'];
	$subject = "";
	$message = "Tak for din bestilling.\n 
	Vi vil gøre alt, hvad vi kan, for at finde et bord til dig. \n
	Du får en endelig bekræftelse fra os inden for 24 timer. \n
	Vi glæder os til at se dig.\n 
	--Froggy's Café";

	mail($email, $subject, $message);
}

?>