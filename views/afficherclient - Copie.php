<?PHP
include "../core/clientC.php";
$client1C=new clientC();
$listeclients=$client1C->afficherclients();

//var_dump($listeclients->fetchAll());
?>
<table border="1">
<tr>
<td>username</td>
<td>mail</td>
<td>password</td>
<td>tel</td>
<td>age</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	</form>
	</td>
	<td><a href="modifierclient.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


