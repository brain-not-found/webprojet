<?php

include "crudCategorie.php";
$crud = new crudCategorie();



if(!empty($_POST)) {
    $emp = new classCategorie($_POST["categorieA"]);
    $crud->ajouter($emp);
    header('Location: http://localhost/projet/produit.php');
}
?>