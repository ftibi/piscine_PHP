<?php

//Ca ne marche pas, je voulais trouver un moyen de rester en une seule fct

Class Tyrion extends Lannister
{
	public function __construct() {
		parent::__construct();
		print("My name is Tyrion" . PHP_EOL);
		function getSizeFunc(){
			return "Short";
		}
	}
}

//Cette classe defini 2 fonctions, l'ennonce n'en veut qu'une seule
// Class Tyrion extends Lannister
// {
// 	public function __construct() {
// 		parent::__construct();
// 		print("My name is Tyrion" . PHP_EOL);
// 	}
// 	public function getSize() {
// 			return "Short";
// 	}
// }


?>
