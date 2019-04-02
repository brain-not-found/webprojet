<?PHP
include "../config.php";
class panierC {

function afficherpanier ($panier){
		echo "Nbr: ".$panier->getNbr()."<br>";
	}
		
	
	function ajouterpanier($panierpanier){
		$sql="insert into panier (nbr) values (:nbr)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nbr=$panierpanier->getNbr();

		$req->bindValue(':nbr',$nbr);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpaniers(){
		//$sql="SElECT * From panier e inner join formationphp.panier a on e.cin= a.cin";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpanier($nbr){
		$sql="DELETE FROM panier where nbr= :nbr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nbr',$nbr);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierpanier($panier,$nbr){
		$sql="UPDATE panier SET nbr=:nbrn, WHERE nbr=:nbr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nbrn=$panier->getNbr();
        
		$datas = array(':nbrn'=>$nbrn, ':nbr'=>$nbr);
		$req->bindValue(':nbrn',$nbrn);
		$req->bindValue(':nbr',$nbr);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererpanier($nbr){
		$sql="SELECT * from panier where nbr=$nbr";
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