<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/voiture.php";
include "../core/voitureC.php";
if (isset($_GET['matricule'])){
	$voitureC=new voitureC();
    $result=$voitureC->recuperervoiture($_GET['matricule']);
	foreach($result as $row){
		$matricule=$row['matricule'];
		$marque=$row['marque'];
		$chauffeur=$row['chauffeur'];
		$livraison=$row['livraison'];
?>
<form method="POST">
<table>
<caption>Modifier VOITURE</caption>
<tr>
<td>MATRICULE</td>
<td><input type="number" name="matricule" value="<?PHP echo $matricule ?>"></td>
</tr>
<tr>
<td>marque</td>
<td><input type="text" name="marque" value="<?PHP echo $marque ?>"></td>
</tr>
<tr>
<td>chauffeur</td>
<td><input type="text" name="chauffeur" value="<?PHP echo $chauffeur ?>"></td>
</tr>
<tr>
<td>livraison</td>
<td><input type="number" name="livraison" value="<?PHP echo $livraison ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="matricule" value="<?PHP echo $_GET['matricule'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$voiture=new voiture($_POST['matricule'],$_POST['marque'],$_POST['chauffeur'],$_POST['livraison']);
	$voitureC->modifiervoiture($voiture,$_POST['matricule']);
	echo $_POST['matricule'];
	header('Location: affichevoiture.php');
}
?>
</body>
</HTMl>