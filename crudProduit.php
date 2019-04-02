<?php
/**
 * Created by PhpStorm.
 * User: Hamza
 * Date: 01/12/2018
 * Time: 09:13
 */

include "config.php";
include "classProduit.php";

include "classCategorie.php";


class crudProduit
{
    private $cnx;

    function __construct()
    {

        $this->cnx = config::getConnexion();
    }



    function ajouter($prod)
    {
        $sql = "insert into produit(nom,prix,quantite,categorie,descr,image) values('" . $prod->getNom() . "','" . $prod->getPrix() . "','" . $prod->getQuantite() . "','" . $prod->getCategorie() . "','".$prod->getDescr()."','".$prod->getImage()."')";

        try {
            $this->cnx->exec($sql);
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }

    }

    function afficher()
    {
        $sql = "select * from produit";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }
    function detail($id){
        $sql = "select * from produit where id=$id";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }

    function delete($id)
    {
        $sql = "DELETE FROM produit WHERE id=$id";

        try {
            $this->cnx->exec($sql);
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }

    function afficherRechercher($nom)
    {
        $sql = "select * from produit where nom='".$nom."'";
        try {
           return $this->cnx->query($sql)->fetchAll();

        } catch (Exception $e) {

            echo "Erreur" . $e->getMessage();
        }

    }

    function modifier($personne, $id)
    {

        $sql = "UPDATE `produit` SET `nom`=:name,`prix`=:prix,`quantite`=:quantite,`categorie`=:categorie ,`descr`=:descr,`image`=:image  where `id`=$id";
        $sql = $this->cnx->prepare($sql);

        $sql->bindValue('name', $personne->getNom());
        $sql->bindValue('prix', $personne->getPrix());
        $sql->bindValue('categorie', $personne->getCategorie());
        $sql->bindValue('quantite', $personne->getQuantite());
        $sql->bindValue('image', $personne->getImage());
        $sql->bindValue('descr', $personne->getDescr());
        try {
            $sql->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }/*
    function Calculer(){

        $sql="SELECT categorie, SUM(quantite) as nb FROM vente GROUP BY categorie";

        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }

*/
    function nombreproduit()
    {
        $sql = "select COUNT(*) as total from produit";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }
    function nombreDoccurence()
    {
        $sql = "select max(COUNT(id)) as total from produit ";
        try {
            return $this->cnx->query($sql)->fetchall();
        } catch (Exception $e) {
            echo "Erreur" . $e->getMessage();
        }
    }
}


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


