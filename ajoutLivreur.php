<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['datedenaissance']) and isset($_POST['numerodetelephone']) and isset($_POST['adresse']) and isset($_POST['salaire']) and isset($_POST['heuredetravail']) and isset($_POST['datedetravail'])){
$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datedenaissance'],$_POST['numerodetelephone'],$_POST['adresse'],$_POST['salaire'],$_POST['heuredetravail'],$_POST['datedetravail']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1C=new livreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: afficheLivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>