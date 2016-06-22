<?php

class NightsWatch
{
	public $brother = array();

	public function recruit($recrue)
	{
		array_push($this->brother, $recrue);
		return;
	}

	public function fight()
	{
		foreach ($this->brother as $hero)
		{
			if (method_exists($hero, 'fight'))
				$hero->fight();
		}
		return;
	}
}

?>
