<?php

class UnholyFactory
{
	public $available = array();
	public function absorb($fighter)
	{
		if (isset($this->available[$fighter->type]))
			echo "(Factory already absorbed a fighter of type ".$fighter->type.")\n";
		else if (get_parent_class($fighter) == 'fighter')
		{
			$this->available[$fighter->type] = $fighter;
			echo "(Factory absorbed a fighter of type ".$fighter->type.")\n";
		}
		else
			echo"(Factory can't absorb this, it's not a fighter)\n";
		return;
	}
	public function fabricate($fighter)
	{
		if (isset($this->available[$fighter]))
		{
			echo "(Factory fabricates a fighter of type ".$fighter.")\n";
			return (new $this->available[$fighter]);
		}
		else
			echo "(Factory hasn't absorbed any fighter of type ".$fighter.")\n";
	}
}

?>
