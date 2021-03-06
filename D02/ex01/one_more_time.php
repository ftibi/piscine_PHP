#!/usr/bin/php
<?php

if ($argc != 2)
	return (0);

$month = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet",
			"Aout", "Septembre", "Octobre", "Novembre", "Decembre");
$month2 = array("toto", "janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet",
			"aout", "septembre", "octobre", "novembre", "decembre");
array_unshift($month, "toto");
unset($month[0]);
unset($month2[0]);
$month = array_flip($month);
$month2 = array_flip($month2);
$month = array_merge($month, $month2);


function wrong_format($nb)
{
	echo "Wrong Format\n";
	exit (0);
}

function ft_is_digit($str)
{
	$str = str_split($str);
	foreach ($str as $elem)
	{
		if (ord($elem) < 48 || ord($elem) > 57)
			return (0);
	}
	return (1);
}

function test_format($date, $time, $argv)
{
	$days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche",
				"Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	$month = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet",
				"Aout", "Septembre", "Octobre", "Novembre", "Decembre",
				"janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet",
				"aout", "septembre", "octobre", "novembre", "decembre");
	if (count($date) != 5)
		wrong_format(1);
	if (preg_match_all("/ /", $argv[1]) != 4)
		wrong_format(2);
	if (strlen($date[3]) != 4)
		wrong_format(3);
	if (!ft_is_digit($date[3]))
		wrong_format(4);
	if (preg_match_all("/:/", $date[4]) != 2)
		wrong_format(5);
	foreach ($time as $elem)
	{
		if (!ft_is_digit($elem))
			wrong_format(6);
		if (strlen($elem) != 2)
			wrong_format(7);
	}
	if (!array_search($date[0], $days))
		wrong_format(8);
	if (!array_search($date[2], $month))
		wrong_format(9);
}

//settings
date_default_timezone_set('Europe/Paris');
//transformation
$date = explode(' ', $argv[1]);
// echo_r($date);
$time = explode(':', $date[4]);

test_format($date, $time, $argv);


$res = mktime($time[0], $time[1], $time[2], $month[$date[2]], $date[1], $date[3]);
echo "$res\n";

?>
