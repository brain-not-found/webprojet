<?PHP
include "../entities/voiture.php";
include "../core/voitureC.php";

if (isset($_POST['matricule']) and isset($_POST['marque']) and isset($_POST['chauffeur']) and isset($_POST['livraison'])){
$voiture1=new voiture($_POST['matricule'],$_POST['marque'],$_POST['chauffeur'],$_POST['livraison']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$voiture1C=new voitureC();
$voiture1C->ajoutervoiture($voiture1);
header('Location: affichevoiture.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>