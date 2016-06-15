#!/usr/bin/php
<?php

if ($argc == 1)
	return (0);
$res = preg_replace("/[ 	]{1,}/"," ", $argv[1]);
echo "$res\n";

?>
