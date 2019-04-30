<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['identifiant'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_GET['identifiant']);
	foreach($result as $row){
		$identifiant=$row['identifiant'];
		$produit=$row['produit'];
		$quantite=$row['quantite'];
		$adresse=$row['adresse'];
?>
<HTML>
<head>
</head>
<body>
<form method="POST" accept="afficherr.php">
<table>
<caption>modifier livraison</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="identifiant" value="<?PHP echo $identifiant ?>"></td>
</tr>
<tr>
<td>produit</td>
<td><input type="text" name="produit" value="<?PHP echo $produit ?>"></td>
</tr>
<tr>
<td>quantite</td>
<td><input type="text" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="texy" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['identifiant'],$_POST['produit'],$_POST['quantite'],$_POST['adresse']);
	$livraisonC->modifierlivraison($livraison,$_POST['identifiant']);
	echo $_POST['identifiant'];
	header('Location: afficherr.php');
	include "../Nexmo/src/NexmoMessage.php" ;


	

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b951a336','E4pW6SpfCUuU9YMW');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21652363503', 'Wapi', 'vos donnees ont été modifiés ' );

	// Step 3: Display an overview of the message
	

	// Done!  
}
}
?>
</body>
</HTMl>