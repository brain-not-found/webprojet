<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["supprimer"])){
	$livraisonC->supprimerlivraison($_POST["identifiant"]);
	header('Location: afficherr.php');
}

?>