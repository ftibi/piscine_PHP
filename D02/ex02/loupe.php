#!/usr/bin/php
<?php

$fd = fopen($argv[1], 'r');
$str = "";
while ($new = fgets($fd))
	$str = $str.$new;
fclose($fd);

$pattern = '/title="(.*?)"/';
$pattern2 = '/<a.+>(.+?)</';
function func($match)
{
	$match[0] = preg_replace("/".$match[1]."/", strtoupper($match[1]), $match[0]);
	return ($match[0]);
}

$str = preg_replace_callback($pattern, "func", $str);
$str = preg_replace_callback($pattern2, "func", $str);

echo "$str";

?>
