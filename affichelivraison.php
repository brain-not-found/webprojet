<?PHP
include "../core/livraisonC.php";
$livraison1C=new livraisonC();
$listelivraisons=$livraison1C->afficherlivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>identifiant</td>
<td>produit</td>
<td>quantite</td>
<td>adresse</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['identifiant']; ?></td>
	<td><?PHP echo $row['produit']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['identifiant']; ?>" name="identifiant">
	</form>
	</td>
	<td><a href="modifierlivraison.php?cin=<?PHP echo $row['identifiant']; ?>">
	Modifier</a></td>
	</tr>
	
	<?PHP
}
?>
</table>


