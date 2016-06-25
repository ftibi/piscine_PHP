<?php

if ($item = $_POST['itemtodel']){
	$data = file_get_contents('list.csv');
	$data = preg_replace('/\n.*;$item\n/', '\n', $data);
	file_put_contents('list.csv', $data);
}

?>
