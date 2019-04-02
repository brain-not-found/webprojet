<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/panier.php";
include "../core/panierC.php";
if (isset($_GET['nbr'])){
	$panierC=new panierC();
    $result=$panierC->recupererpanier($_GET['nbr']);
	foreach($result as $row){
		$nbr=$row['nbr'];
		
?>
<form method="POST">
<table>
<caption>Modifier panier</caption>
<tr>
<td>nbr</td>
<td><input type="number" name="nbr" value="<?PHP echo $nbr ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nbr_ini" value="<?PHP echo $_GET['nbr'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['nbr']);
	$panierC->modifierpanier($panier,$_POST['nbr_ini']);
	echo $_POST['nbr_ini'];
	header('Location: afficherpanier.php');
}
?>
</body>
</HTMl>