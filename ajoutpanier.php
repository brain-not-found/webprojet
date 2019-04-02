<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['nbr'])){
$panier1=new panier($_POST['nbr']);
//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$panier1C=new panierC();
$panier1C->ajouterpanier($panier1);
header('Location: afficherpanier.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>