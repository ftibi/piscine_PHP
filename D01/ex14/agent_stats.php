#!/usr/bin/php
<?php

if ($argc != 2)
	return (0);
$f = fgets(STDIN);
switch ($argv[1])
{
	case "moyenne":
		$nb = 0;
		$sum = 0;
		while ($f = fgets(STDIN))
		{
			$line = explode(";", $f);
			if (is_numeric($line[1]))
			{
				$sum += $line[1];
				$nb++;
			}
		}
		$res = $sum / $nb;
		echo "$res\n";
		break;
	case "moyenne_user":
		break;
	case "ecart_moulinette":
		break;
}
?>
