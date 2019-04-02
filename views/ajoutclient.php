<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['username']) and isset($_POST['mail']) and isset($_POST['password']) and isset($_POST['tel']) and isset($_POST['age'])){
$client1=new client($_POST['username'],$_POST['mail'],$_POST['password'],$_POST['tel'],$_POST['age']);
//Partie2
/*
var_dump($client1);
}
*/
//Partie3
$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: afficherclient.php');
	
}

else{
	echo "vérifier les champs";
}
//*/

?>