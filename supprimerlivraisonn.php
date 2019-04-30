<?PHP
include "../core/livraisonnC.php";
$livraisonnC=new livraisonnC();
if (isset($_POST["supprimer"])){
	$livraisonnC->supprimerlivraisonn($_POST["cin"]);
	header('Location: afficherlivraison.php');
}

?>