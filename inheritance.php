<?php


class User{
	protected $uname;
	public function setname($name){ $this->uname = $name;}
}


class Admin extends User{
	public function role():string{ return __CLASS__;}
	public function hello():string{ return "hello ".$this->role().", ".$this->uname;}
}


//__CLASS__ returns the current class name


$admin  = new Admin();
$admin->setname("john pinto");
echo $admin->hello();


?>


