#!/usr/bin/php
<?php

$key = $argv[1];
$value;

$i = 2;
while ($i < $argc)
{
		$pos = strpos($argv[$i], $argv[1].':');
	if ($pos === 0)
	{
		$pos = strpos($argv[$i], ':');
		$res = substr($argv[$i], $pos + 1);
	}
	$i++;
}
if ($res)
	echo "$res\n";

?>
