<?php

class House
{
	public function getHouseName() {
		return;
	}
	public function getHouseMotto() {
		return;
	}
	public function getHouseSeat() {
		return;
	}
	public function introduce()
	{
		echo "House $this->getHouseName() of $this->getHouseSeat() : \"$this->getHouseMotto()\"\n";
	}
}


?>
