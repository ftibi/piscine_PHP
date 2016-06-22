<?php

class Color
{
	public $red;
	public $green;
	public $blue;
	public static $verbose = False;

	function __construct($rgb_arr)
	{

		if (isset($rgb_arr['rgb']))
		{
			$hex = $rgb_arr['rgb'];
			$int = hexdec($hex);
			$this->red = ($int >> 16) & 255;
			$this->green = ($int >> 8) & 255;
			$this->blue = $int & 255;
		}
		else
		{
			$this->red = hexdec($rgb_arr['red']);
			$this->green = hexdec($rgb_arr['green']);
			$this->blue = hexdec($rgb_arr['blue']);
		}
		if (Color::$verbose === True)
			echo "Color (red: $this->red, green: $this->green, blue: $this->blue) constructed.\n";
		return;
	}

	function __destruct()
	{
		if (Color::$verbose === True)
			echo "Color (red: $this->red, green: $this->green, blue: $this->blue) constructed.\n";
		return;
	}
	function __toString()
	{
		return "Color (red: $this->red, green: $this->green, blue: $this->blue)";
	}
	public static function doc()
	{
		$doc = file_get_contents("Color.doc.txt");
		return ($doc);
	}
	function add()
	{
		return (new Color(1));
	}
	function sub()
	{
		return (new Color(1));
	}
	function mult()
	{
		return (new Color(1));
	}
}

?>
