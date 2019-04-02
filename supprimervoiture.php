<?PHP
include "../core/voitureC.php";
$voitureC=new voitureC();
if (isset($_POST["matricule"])){
	$voitureC->supprimervoiture($_POST["matricule"]);
	header('Location: afficher.php');
}

?>