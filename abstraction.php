<?php


abstract class User{
	abstract public function role(); // abstract methods should be compulsorly implemented
}
class Admin extends User{
	public function role():string{ return __CLASS__;}
}

$a = new Admin();
echo $a->role();


?>


