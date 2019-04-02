<?PHP
include "../entities/livraisonn.php";
include "../core/livraisonnC.php";
if (isset($_GET['identifiant'])){
	$livraisonnC=new livraisonnC();
    $result=$livraisonnC->recupererlivraisonn($_GET['identifiant']);
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
<form method="POST" accept="afficher.php">
<table>
<caption>modifier livraisonn</caption>
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
	$livraisonn=new livraisonn($_POST['identifiant'],$_POST['produit'],$_POST['quantite'],$_POST['adresse'],$_POST['numerodetelephone']);
	$livraisonnC->modifierlivraisonn($livraisonn,$_POST['identifiant']);
	echo $_POST['identifiant'];
	header('Location: afficherrr.php');
}
?>
</body>
</HTMl>