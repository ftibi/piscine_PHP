#!/usr/bin/php
<?php

function read_stdin()
{
        $fr=fopen("php://stdin","r");
        $input = fgets($fr);
        $input = rtrim($input);
        fclose ($fr);
        return $input;
}

while (1)
{
	echo "Entrez un nombre: ";
	$stdin = read_stdin();
	if(is_numeric($stdin))
	{
		if ($stdin % 2 == 0)
			echo("Le chiffre $stdin est Pair\n");
		else
			echo("Le chiffre $stdin est Impair\n");
	}
	else
	{
		echo("'$stdin' n'est pas un chiffre\n");
	}
}

?>
