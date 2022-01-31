<?php



class User{
	private $uname;
	public function setname($name){
		$this->uname = (string) $name;}
	public function getname():string{
		return $this->uname;
	}
}

interface Author{
	public function setAuthor($arr);
	public function getAuthor();
}
interface  Editor{
	public function setEditor($arr);
	public function getEditor();
}

class AuthorEditor extends User implements Author, Editor{
	private $author, $editor;
	public function setAuthor($arr){ $this->author = $arr;}
	public function getAuthor():array { return $this->author;}
	public function setEditor($arr){ $this->editor = $arr;}
	public function getEditor():array{ return $this->editor;}
}


$user = new AuthorEditor;
$user->setname("john");
$username = $user->getname();
$sets = ['as','as'];
$user->setAuthor($sets);
$user->setEditor($sets);
$p = array_merge($user->getAuthor(), $user->getEditor());

echo "$username, has the following privileges: ";
foreach($p as $p){ 
	echo "$p, ";
}

?>

