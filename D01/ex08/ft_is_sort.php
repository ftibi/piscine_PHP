#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$sorted_tab = $tab;
	sort($tab, SORT_STRING);
	if ($tab !== $sorted_tab)
	{
			echo "Le tableau n'est pas trie\n";
			return (0);
	}
	echo "Le tableau est trie\n";
	return (1);
}

ft_is_sort(array(1, 2, 3));
ft_is_sort(array(1, 2, 3, 0));
ft_is_sort(array("a", "b", "c", "d"));
ft_is_sort(array("a", "c", "b", "d"));

?>
