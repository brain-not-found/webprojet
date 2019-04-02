<?PHP
include "../core/carteC.php";
$carteC=new carteC();
if (isset($_POST["username"])){
	$carteC->supprimercarte($_POST["username"]);
	header('Location: Gestion Client.php');
}

?>