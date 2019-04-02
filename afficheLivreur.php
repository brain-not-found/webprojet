<?PHP
include "../core/livreurC.php";
$livreur1C=new livreurC();
$listelivreurs=$livreur1C->afficherlivreurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>datedenaissance</td>
<td>numerodetelephone</td>
<td>adresse</td>
<td>salaire</td>
<td>heuredetravail</td>
<td>datedetravail</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['datedenaissance']; ?></td>
	<td><?PHP echo $row['numerodetelephone']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['salaire']; ?></td>
	<td><?PHP echo $row['heuredetravail']; ?></td>
	<td><?PHP echo $row['datedetravail']; ?></td>
	<td><form method="POST" action="supprimerlivreur.php">
	<input type="submit" name="supprimer" value="supprimer" >
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierlivreur.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	
	<?PHP
}
?>
</table>


