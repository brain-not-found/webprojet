<?php 



include "config.php";
include "classCategorie.php";

class crudCategorie
{
    private $cnx;

    function __construct()
    {

        $this->cnx = config::getConnexion();
    }


    
    function ajouter($prod)
    {
        $sql = "insert into categorie(nom) values('" . $prod->getNom() . "')";

        try {
            $this->cnx->exec($sql);
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }

    }

    function afficher()
    {
        $sql = "select * from categorie";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }

 function delete($id)
    {
        $sql = "DELETE FROM categorie WHERE id=$id";

        try {
            $this->cnx->exec($sql);
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }

    function afficherT($id)
    {
        $sql = "select * from categorie where `id`=$id";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }

    }
     function modifier($personne, $id)
    {

        $sql = "UPDATE `categorie` SET `nom`=:name where `id`=$id";
        $sql = $this->cnx->prepare($sql);

        $sql->bindValue('name', $personne->getNom());
        //$sql->bindValue('artist', $personne->getPrix());
        //$sql->bindValue('datee', $personne->getCategorie());
        //$sql->bindValue('gallery', $personne->getQuantite());
        try {
            $sql->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function nombrecategorie()
    {
        $sql = "select COUNT(*) as total from categorie";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }
}


 ?>