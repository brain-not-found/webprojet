<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["nom"])){
	$commandeC->supprimercommande($_POST["nom"]);
	header('Location: affichercommande.php');
}

?>