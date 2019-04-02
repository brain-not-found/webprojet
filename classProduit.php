<?php
/**
 * Created by PhpStorm.
 * User: Hamza
 * Date: 01/12/2018
 * Time: 09:10
 */

class classProduit
{

    private $id;
    private $nom;
    private $prix;
    private $quantite;
    private $categorie;
    private $image;
    private $descr;

    /**
     * classProduit constructor.
     * @param $nom
     * @param $prix
     * @param $quantite
     * @param $categorie
     */
    public function __construct($nom, $prix, $quantite, $categorie,$descr,$image)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->categorie = $categorie;
        $this->descr=$descr;
        $this->image=$image;
    }

    /**
     * @return mixed
     */
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

 public function getDescr()
    {
        return $this->descr;
    }

    /**
     * @param mixed $nom
     */
    public function setDescr($nom)
    {
        $this->descr = $nom;
    }



      public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $nom
     */
    public function setImage($nom)
    {
        $this->image = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}
?>