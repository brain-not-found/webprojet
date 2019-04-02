<?PHP
class commande{
	private $nom;
	private $prenom;
	private $numtelephone;
	private $adresse;
	private $cmd;
	private $numcomamnde;
	private $etatcommande;
	function __construct($nom,$prenom,$numtelephone,$adresse,$cmd,$numcomamnde,$etatcommande){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numtelephone=$numtelephone;
		$this->adresse=$adresse;
		$this->cmd=$cmd;
		$this->numcomamnde=$numcomamnde;
		$this->etatcommande=$etatcommande;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getnumtelephone(){
		return $this->numtelephone;
	}
	function getcmd(){
		return $this->cmd;
	}
	function getadresse(){
		return $this->adresse;
	}
    function getnumcommande(){
		return $this->numcomamnde;
	}
	function getetatcommande(){
		return $this->etatcommande;
	}
	
function setnom($prenom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setnumtelephone($numtelephone){
		$this->numtelephone;
	}
	function setcmd($cmd){
		$this->cmd=$cmd;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}

	
	function setnumcommande($numcomamnde){
		$this->numcomamnde=$numcomamnde;
	}

	
	function setetatcommande($etatcommande){
		$this->etatcommande=$etatcommande;
	}

	
}

?>