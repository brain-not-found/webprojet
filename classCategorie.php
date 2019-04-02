<?php 


class classCategorie{


	private $id;
	private $nom;

	 public function __construct($nom)
    {
        $this->nom = $nom;
        
    }

 public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    
}




 ?>