<?PHP
include "../config.php";
class clientC {



/*function afficherclient ($client){
		echo "username: ".$client->getusername()."<br>";
		echo "mail: ".$client->getmail()."<br>";
		echo "passowrd: ".$client->getpassword()."<br>";
		echo "tel: ".$client->gettel()."<br>";
		echo "age: ".$client->getage()."<br>";
		echo "photo: ".$client->getphoto()."<br>";

	}*/


	function ajouterclient($client){
		$sql="insert into client (username,mail,password,tel,age) values (:username, :mail,:password,:tel,:age)";
		$db = config::getConnexion();
		
		try{
        $req=$db->prepare($sql);
		
        $username=$client->getusername();
        $mail=$client->getmail();
        $password=$client->getpassword();
        $age=$client->getage();
        $tel=$client->gettel();
        //$photo=$client->getphoto();
       
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':password',$password);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		//$req->bindValue(':photo',$photo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	


	function afficherclients(){
		//$sql="SElECT * From client e inner join formationphp.client a on e.username= a.username";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimerclient($username){
		$sql="DELETE FROM client where username= :username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierclient($client,$username){
		$sql="UPDATE client SET username=:usernamen,mail=:mail,password=:password,tel=:tel,age=:age WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$usernamen=$client->getusername();
        $mail=$client->getmail();
        $password=$client->getpassword();
        $tel=$client->gettel();
        $age=$client->getage();
        //$photo=$client->getphoto();


		$datas = array(':usernamen'=>$usernamen, ':username'=>$username, ':mail'=>$mail,':password'=>$password,':tel'=>$tel,':age'=>$age);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':password',$password);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		//$req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



	function recupererclient($username){
		$sql="SELECT * from client where username=$username";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


	/*function rechercherListeclients($tarif){
		$sql="SELECT * from client where tel=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/



}

?>