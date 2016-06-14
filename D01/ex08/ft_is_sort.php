#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$i = 0;
	while ($i < count($tab) - 1)
	{
		if ($tab[$i] > $tab[$i + 1])
		{
			echo "Le tableau n'est pas trie\n";
			return 0;
		}
		$i++;
	}
	echo "Le tableau est trie\n";
	return (1);
}

ft_is_sort(array(1, 2, 3));
ft_is_sort(array(1, 2, 3, 0));
ft_is_sort(array("a", "b", "c", "d"));
ft_is_sort(array("a", "c", "b", "d"));

?>
