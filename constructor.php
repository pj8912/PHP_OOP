<?php

class User{
	private $uname;
	public function __construct($name = null){
		$this->uname = $name;
	}
	public function getname():string{ 
		return $this->uname;
	}
}

$user = new User("john pinto");
echo $user->getname();
exit();

?>

