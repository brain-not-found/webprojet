<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_PSOT['username'])){
	$clientC=new clientC();
    $result=$clientC->recupererclient($_POST['username']);
	foreach($result as $row){
		$username=$row['username'];
		$mail=$row['mail'];
		$password=$row['password'];
		$tel=$row['tel'];
		$age=$row['age'];
?>
<form method="POST">
<table>
<caption>Modifier client</caption>
<tr>
<td>username</td>
<td><input type="number" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
</tr>
<tr>
<td>tel </td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>age</td>
<td><input type="text" name="age" value="<?PHP echo $age ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></t>
<td><input type="hidden" name="username_ini" value="<?PHP echo $_GET['username'];?>"></td>
</tr>d
</table>
</form>
<?PHP
	}
}
else 
echo "barra nayik";
if (isset($_POST['modifier'])){
	$client=new client($_POST['username'],$_POST['mail'],$_POST['password'],$_POST['tel'],$_POST['age']);
	$clientC->modifierclient($client,$_POST['username_ini']);
	echo $_POST['username_ini'];
	header('Location: afficherclient.php');
}

?>
</body>
</HTMl>