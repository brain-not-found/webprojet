<?PHP
include "../config.php";
class carteC {



/*function affichercarte ($carte){
		echo "username: ".$carte->getusername()."<br>";
		echo "mail: ".$carte->getmail()."<br>";
		echo "passowrd: ".$carte->gettype()."<br>";
		echo "tel: ".$carte->gettel()."<br>";
		echo "age: ".$carte->getage()."<br>";
		echo "photo: ".$carte->getphoto()."<br>";

	}*/


	function ajoutercarte($carte){
		$sql="insert into carte (username,mail,type,nom,prenom,tel,age) values (:username, :mail, :type, :nom, :prenom, :tel, :age)";
		$db = config::getConnexion();
		
		try{
        $req=$db->prepare($sql);
		
        $username=$carte->getusername();
        $mail=$carte->getmail();
        $type=$carte->gettype();
        $nom=$carte->getnom();
        $prenom=$carte->getprenom();
        $age=$carte->getage();
        $tel=$carte->gettel();
        //$photo=$carte->getphoto();
       
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		//$req->bindValue(':photo',$photo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	


	function affichercartes(){
		//$sql="SElECT * From carte e inner join formationphp.carte a on e.username= a.username";
		$sql="SElECT * From carte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimercarte($username){
		$sql="DELETE FROM carte where username=:username";
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



	function modifiercarte($carte,$username){
		$sql="UPDATE carte SET username=:usernamen, mail=:mail,type=:type,nom=:nom,prenom:=prenom,tel=:tel,age=:age WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$usernamen=$carte->getusername();
        $mail=$carte->getmail();
        $type=$carte->gettype();
        $nom=$carte->getnom();
        $prenom=$carte->getprenom();
        $tel=$carte->gettel();
        $age=$carte->getage();
        //$photo=$carte->getphoto();


		$datas = array(':usernamen'=>$usernamen, ':username'=>$username, ':mail'=>$mail,':type'=>$type,':tel'=>$tel,':age'=>$age);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
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



	function recuperercarte($username){
		$sql="SELECT * from carte where username=$username";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


	/*function rechercherListecartes($tarif){
		$sql="SELECT * from carte where tel=$tarif";
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