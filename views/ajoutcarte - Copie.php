<?PHP
include "../entities/carte.php";
include "../core/carteC.php";

if (isset($_POST['username']) and isset($_POST['mail']) and isset($_POST['type']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['age'])){
$carte1=new carte($_POST['username'],$_POST['mail'],$_POST['type'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['age']);
//Partie2
/*
var_dump($carte1);
}
*/
//Partie3
$carte1C=new carteC();
$carte1C->ajoutercarte($carte1);
header('Location: Gestion Client.php');
	
}

else{
	echo "vérifier les champs";
}
//*/

?>