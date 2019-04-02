<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['identifiant']) and isset($_POST['produit']) and isset($_POST['quantite']) and isset($_POST['adresse'])){
$livraison1=new livraison($_POST['identifiant'],$_POST['produit'],$_POST['quantite'],$_POST['adresse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: affichelivraison.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>