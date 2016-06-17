<?php

include 'auth.php';

if (auth($_POST["login"], $_POST["passwd"]))
{
		echo "
<iframe></iframe>


";
}
else
	echo ("ERROR\n");

?>
