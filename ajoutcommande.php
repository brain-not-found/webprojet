<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numtelephone']) and isset($_POST['adresse']) and isset($_POST['cmd'])and isset($_POST['numcommande'])and isset($_POST['etatcommande'])){
$commande1=new commande($_POST['nom'],$_POST['prenom'],$_POST['numtelephone'],$_POST['adresse'],$_POST['cmd'],$_POST['numcommande'],$_POST['etatcommande']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
header('Location: affichercommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>