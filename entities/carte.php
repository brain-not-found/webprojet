<?php
class carte {

	private $username; 
	private $mail;
	private $type;
	private $nom;
	private $prenom;
	private $tel;
	private $age;

	function __construct($username,$mail,$type,$nom,$prenom,$tel,$age)
	{
		$this->username=$username;
		$this->mail=$mail;
		$this->type=$type;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->age=$age;
	}

	function getusername(){ return $this->username ; }
	function getmail(){ return $this->mail ; }
	function gettype(){ return $this->type ; }
	function getnom(){ return $this->nom ; }
	function getprenom(){ return $this->prenom ; }
	function gettel(){ return $this->tel ; }
	function getage(){ return $this->age ; }


	function setmail($mail){ $this->mail=$mail ; }
	function settype($type){ $this->type=$type ; }
	function settel($tel){ $this->tel=$tel ; }
	function setage($photo){ $this->age=$age ; }

}

?>