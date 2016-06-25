<?php

if ($item = $_POST['itemtodel']){
	$data = file_get_contents('list.csv');
	$data = preg_replace('/'.$item.';'.'.*\n/', '', $data);
	// $data = preg_replace('\d*\.\d*;'.$item.'\n', '', $data);
	file_put_contents('list.csv', $data);
}

?>
