#!/usr/bin/php
<?php

if ($argc != 2)
	return (0);

//Penser a verifier que le format est valide

//settings
date_default_timezone_set('Europe/Paris');

$month = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet",
			"Aout", "Septembre", "Octobre", "Novembre", "Decembre");
array_unshift($month, "toto");
unset($month[0]);
$month = array_flip($month);
$date = explode(' ', $argv[1]);
$time = explode(':', $date[4]);
$res = mktime($time[0], $time[1], $time[2], $month[$date[2]], $date[1], $date[3]);

echo "$res\n";

?>
