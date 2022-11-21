<?php

class User{
        public $fname;
        public function register(){
                echo $this->fname." registered";
                return $this;
        }
        public function mail(){
                echo " mailed";
        }
}
$user = new User();
$user->fname ="john";
$user->register()->mail();

?>

