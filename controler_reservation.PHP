<?php
	include 'modele.PHP';

	$reservation = new Reservation($_POST['pays'],$_POST['places']);
	echo $reservation->getDestination();

	include 'passenger.PHP';

?>