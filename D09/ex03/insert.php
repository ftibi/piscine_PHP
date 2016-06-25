<?php

if ($item = $_POST['itemtoadd']){
	$data = file_get_contents('list.csv');
	$data = $_POST['id'].";".$_POST['itemtoadd']."\n".$data;
	file_put_contents('list.csv', $data);
}

?>
