#!/usr/bin/php
<?php

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return 0;
}
$val1 = $argv[1];
$val2 = $argv[3];

if (trim($argv[2]) == '+')
	 echo($val1 + $val2."\n");
if (trim($argv[2]) == '-')
	 echo($val1 - $val2."\n");
if (trim($argv[2]) == '/')
	 echo($val1 / $val2."\n");
if (trim($argv[2]) == '*')
	 echo($val1 * $val2."\n");
if (trim($argv[2]) == '%')
	 echo($val1 % $val2."\n");

?>
