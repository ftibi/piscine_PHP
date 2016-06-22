<?php

class Lannister
{
	public function sleepWith($perso)
	{
		if (!array_diff(array(get_class($this), get_class($perso)), array('Jaime', 'Cersei')))
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
		else if (get_parent_class($perso) === get_parent_class($this))
			echo "Not even if I'm drunk !\n";
		else
			echo "Let's do this.\n";
	}
}

?>
