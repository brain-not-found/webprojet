<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["nbr"])){
	$panierC->supprimerpanier($_POST["nbr"]);
	header('Location: afficherpanier.php');
}

?>