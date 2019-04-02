<?PHP
include "../core/voitureC.php";
$voiture1C=new voitureC();
$listevoitures=$voiture1C->affichervoitures();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>matricule</td>
<td>marque</td>
<td>chauffeur</td>
<td>livraison</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listevoitures as $row){
	?>
	<tr>
	<td><?PHP echo $row['matricule']; ?></td>
	<td><?PHP echo $row['marque']; ?></td>
	<td><?PHP echo $row['chauffeur']; ?></td>
	<td><?PHP echo $row['livraison']; ?></td>
	<td><form method="POST" action="supprimervoiture.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['matricule']; ?>" name="matricule">
	</form>
	</td>
	<td><a href="modifiervoiture.php?cin=<?PHP echo $row['matricule']; ?>">
	Modifier</a></td>
	</tr>
	
	<?PHP
}
?>
</table>


