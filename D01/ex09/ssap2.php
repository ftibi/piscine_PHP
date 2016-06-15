#!/usr/bin/php
<?php

function ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_diff($tab, [""]);
	$tab = array_values($tab);
	return $tab;
}

function ft_echo_tab($tab)
{
	$i = 0;
	while ($tab[$i])
	{
		echo "$tab[$i]\n";
		$i++;
	}
}

function ft_is_digit($str)
{
	if (ord($str) < 48 || ord($str) > 57)
		return (0);
	return (1);
}

function ft_is_alpha($elem)
{
	if ((ord($elem) >= 65 && ord($elem) <= 90) || (ord($elem) >= 97 && ord($elem) <= 122))
		return (1);
	return (0);
}

function ft_comp_ssap($str1, $str2)
{
	$str1 = str_split($str1);
	$str2 = str_split($str2);
	$i = 0;
	while ($str1[$i])
	{
		if (!$str2[$i])
			return (3);
		if (ft_is_alpha($str1[$i]) && !ft_is_alpha($str2[$i]))
			return (-1);
		if (!ft_is_alpha($str1[$i]) && ft_is_alpha($str2[$i]))
			return (1);
		if (ft_is_digit($str1[$i]) && !ft_is_digit($str2[$i]))
			return (-2);
		if (!ft_is_digit($str1[$i]) && ft_is_digit($str2[$i]))
			return (2);
		if (ft_is_alpha($str1[$i]) && ft_is_alpha($str2[$i]))
		{
			if ((ord($str1[$i]) % 32 - ord($str2[$i]) % 32))
				return (ord($str1[$i]) % 32 - ord($str2[$i]) % 32);
		}
		else if (ord($str1[$i]) - ord($str2[$i]))
			return (ord($str1[$i]) - ord($str2[$i]));
		$i++;
	}
	if ($str2[$i])
		return (-3);
	return (0);
}

$i = 1;
$tab = [];
while ($i < $argc)
{
	$to_merge = ft_split($argv[$i]);
	$tab = array_merge($tab, $to_merge);
	$i++;
}

usort($tab, ft_comp_ssap);
ft_echo_tab($tab);

?>
