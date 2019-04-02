<?PHP
include "../core/carteC.php";
$carte1C=new carteC();
$listecartes=$carte1C->affichercartes();

//var_dump($listecartes->fetchAll());
?>
<table border="1">
<tr>
<td>username</td>
<td>mail</td>
<td>type</td>
<td>nom</td>
<td>prenom</td>
<td>tel</td>
<td>age</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecartes as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><form method="POST" action="supprimercarte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	</form>
	</td>
	<td><a href="modifiercarte.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


