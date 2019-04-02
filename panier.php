<?PHP
class panier{
	private $cnbr;
	
	function __construct($nbr){
		$this->nbr=$nbr;
		
	}
	
	function getNbr(){
		return $this->nbr;
	}

	function setnbr($nbr){
       $this->nbr=$nbr;
	}
	
	
}

?>