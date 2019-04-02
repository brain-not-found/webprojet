<?PHP
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["username"])){
	$clientC->supprimerclient($_POST["username"]);
	header('Location: Gestion Client.php');
}

?>