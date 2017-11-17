<?php
session_start();

if (!empty($_GET['page']) && is_file('controler_'.$_GET['page'].'.PHP'))
{
	include 'controler_'.$_GET['page'].'.PHP';
}
else
{
	include 'reservation.php';
}



?>