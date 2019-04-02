<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['nom'])){
	$commandeC=new commandeC();
    $result=$commandeC->recuperercommande($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$numtelephone=$row['numtelephone'];
		$adresse=$row['adresse'];
		$cmd=$row['cmd'];
		$numcommande=$row['numcommande'];
		$etatcommande=$row['etatcommande'];
?>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Num telephone</td>
<td><input type="number" name="numtelephone" value="<?PHP echo $numtelephone ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="number" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>cmd</td>
<td><input type="number" name="cmd" value="<?PHP echo $cmd ?>"></td>
</tr>
<tr>
<td>num commande</td>
<td><input type="number" name="numcommande" value="<?PHP echo $numcommande ?>"></td>
</tr>
<tr>
<td>etat commande</td>
<td><input type="number" name="etatcommande" value="<?PHP echo $etatcommande ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['nom'],$_POST['prenom'],$_POST['numtelephone'],$_POST['adresse'],$_POST['cmd'],$_POST['numcommande'],$_POST['etatcommande']);
	$commandeC->modifiercommande($commande,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: affichercommande.php');
}
?>
</body>
</HTMl>