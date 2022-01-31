<?php

//set and get methods
//


class User{
	private $uname;
	public function setname($name){ $this->uname = $name;}
	public function getname():string{ return $this->uname;}
}

$user = new User;
$user->setname("john pinto");
echo $user->getname();


?>


