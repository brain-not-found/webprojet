<?php
class client {

	private $username;
	private $mail;
	private $password;
	private $tel;
	private $age;
	/*private $photo;*/

	function __construct($username,$mail,$password,$tel,$age/*,$photo*/)
	{
		$this->username=$username;
		$this->mail=$mail;
		$this->password=$password;
		$this->tel=$tel;
		$this->age=$age;
		//$this->photo=$photo;
	}

	function getusername(){ return $this->username ; }
	function getmail(){ return $this->mail ; }
	function getpassword(){ return $this->password ; }
	function gettel(){ return $this->tel ; }
	function getage(){ return $this->age ; }
	//function getphoto(){ return $this->photo ; }


	function setmail($mail){ $this->mail=$mail ; }
	function setpassword($password){ $this->password=$password ; }
	function settel($tel){ $this->tel=$tel ; }
	function setage($photo){ $this->age=$age ; }
	//function setphoto($photo){ $this->photo=$photo ; }

}

?>