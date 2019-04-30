<?PHP
include "../config.php";
class commandeC {
function affichercommande ($commande){
		echo "nom: ".$commande->getnom()."<br>";
		echo "prenom: ".$commande->getprenom()."<br>";
		echo "numtelephone: ".$commande->getnumtelephone()."<br>";
		echo "adresse: ".$commande->getadresse()."<br>";
		echo "cmd: ".$commande->getcmd()."<br>";
		echo "numcommande: ".$commande->getnumcommande()."<br>";
		echo "etatcommande: ".$commande->getetatcommande()."<br>";
	}
	
	function ajoutercommande($commande){
		$sql="insert into commande (nom,prenom,numtelephone,adresse,cmd,numcommande,etatcommande) values (:nom, :prenom,:numtelephone,:adresse,:cmd,:numcommande,:etatcommande)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	    $nom=$commande->getnom();
        $prenom=$commande->getprenom();
        $numtelephone=$commande->getnumtelephone();
        $adresse=$commande->getadresse();
        $cmd=$commande->getcmd();
        $numcommande=$commande->getnumcommande();
        $etatcommande=$commande->getetatcommande();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numtelephone',$numtelephone);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':cmd',$cmd);
		$req->bindValue(':numcommande',$numcommande);
		$req->bindValue(':etatcommande',$etatcommande);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SELECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function parnom(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SELECT * From commande ORDER BY nom DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function parprenom(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SELECT * From commande ORDER BY prenom DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function parnum(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SELECT * From commande ORDER BY numcommande ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($nom){
		$sql="DELETE FROM commande where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$nom){
		$sql="UPDATE commande SET nom=:nomn, prenom=:prenom,numtelephone=:numtelephone,cmd=:cmd,adresse=:adresse WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomn=$commande->getnom();
        $prenom=$commande->getprenom();
        $numtelephone=$commande->getnumtelephone();
        $nb=$commande->getcmd();
        $tarif=$commande->getadresse();
		$datas = array(':nomn'=>$nomn, ':nom'=>$nom, ':prenom'=>$prenom,':numtelephone'=>$numtelephone,':adresse'=>$adresse,':cmd'=>$cmd,':numcommande'=>$numcommande,':etatcommande'=>$etatcommande);
		$req->bindValue(':nomn',$nomn);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numtelephone',$numtelephone);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':cmd',$cmd);
		$req->bindValue(':numcommande',$numcommande);
		$req->bindValue(':etatcommande',$etatcommande);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($nom){
		$sql="SELECT * from commande where nom='$nom'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommandes($adresse){
		$sql="SELECT * from commande where adresse=$adresse";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>