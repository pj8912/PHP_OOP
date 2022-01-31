<?php

//interfaces are next level of abstraction
//
//


class User{
	private $uname;
	public function setname(string $name){
		$this->uname = $name;
	}
	public function getname():string{ 
		return $this->uname;
	}
}

interface Author{
	public function setAuthor($arr);
	public function getAuthor();
}

interface Editor{
	public function setEditor($arr);
	public function getEditor();
}

class AuthorEditor extends User implements Author, Editor{
	private $author, $editor;
	public function setAuthor($arr){ $this->author = $arr;}
	public function getAuthor():array{ return $this->author;}
	public function setEditor($arr){ $this->editor = $arr;}
	public function getEditor():array{ return $this->editor;
	}
}

$user1 = new AuthorEditor;
$user1->setname("john");
$username  = $user1->getname();
$sets = ['as','as'];
$user1->setAuthor($sets);
$user1->setEditor($sets);
$p = array_merge($user1->getAuthor(), $user1->getEditor());


echo "$username, has the following privileges: ";
foreach($p as $p){
	echo "$p, ";
}

?>


