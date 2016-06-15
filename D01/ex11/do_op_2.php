#!/usr/bin/php
<?php

function sum($val1, $val2)
{
	return ($val1 + $val2);
}

function sub($val1, $val2)
{
	return ($val1 - $val2);
}

function mult($val1, $val2)
{
	return ($val1 * $val2);
}

function div($val1, $val2)
{
	return ($val1 / $val2);
}

function mod($val1, $val2)
{
	return ($val1 % $val2);
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}
$str = (string)$argv[1];
$str = str_replace(' ', '', $str);
$str = str_replace('	', '', $str);
$i = 0;
while ($i < count($str))
{
	while (is_numeric($str[$i]))
		$i++;
	$val1 = intval(substr($str, 0, $i));
	switch ($str[$i])
	{
		case '+':
			$func = 'sum';
			break;
		case '-':
			$func = 'sub';
			break;
		case '*':
			$func = 'mult';
			break;
		case '/':
			$func = 'div';
			break;
		case '%':
			$func = 'mod';
			break;
		default:
			echo "Syntax Error\n";
			exit (0);
	}
	$sub = substr($str, $i + 1);
	$sub = str_split($sub);
	foreach ($sub as $elem)
	{
		if (ord($elem) < 48 || ord($elem) > 57)
		{
			echo "Syntax Error\n";
			return (0);
		}
	}
	$val2 = intval(substr($str, $i + 1));
	if (is_numeric($val2))
	{
		$res = $func($val1, $val2);
		echo "$res\n";
		return (0);
	}
	else
	{
		echo "Syntax Error\n";
		return (0);
	}
}

?>
