#!/usr/bin/php
<?php

$fd = fopen("/var/run/utmpx", 'r');
echo"fd: $fd\n";
$str = "";
while ($new = fgets($fd))
	$str = $str.$new;
fclose($fd);

echo "str: $str\n";
$str = unpack(UTMPX, $str);
print_r($str);
$str = preg_replace("/[\b]*/", "", $str);
$str = preg_replace("/[^\d\sa-zA-Z$]*/", "", $str);
echo "str: $str\n";

?>
