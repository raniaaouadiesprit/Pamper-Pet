<?PHP
require_once '../config.php'; 



class EvenmentC {
function afficherevenment ($evenment){
		echo "id: ".$evenment->getId()."<br>";
		echo "nbr_invt: ".$evenment->getNbr()."<br>";
		echo "nom_evn: ".$evenment->getNom()."<br>";
		echo "date_evn: ".$evenment->getDate_evn()."<br>";
		echo "type_evn: ".$evenment->getType_evn()."<br>";

	}
	
	
	function ajouterEvenment($evenment){
		$sql="insert into evenment (id,nbr_invt,nom_evn,date_evn,type_evn) values (:id, :nbr_invt,:nom_evn,:date_evn,:type_evn)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$evenment->getId();
        $nbr_invt=$evenment->getNbr();
        $nom_evn=$evenment->getNom();
        $date_evn=$evenment->getDate_evn();
		        $type_evn=$evenment->getType_evn();
		$req->bindValue(':id',$id);
		$req->bindValue(':nbr_invt',$nbr_invt);
		$req->bindValue(':nom_evn',$nom_evn);
		$req->bindValue(':date_evn',$date_evn);
				 $req->bindValue(':type_evn',$type_evn);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherEvenments(){
		//$sql="SElECT * From evenment e inner join formationphp.evenment a on e.id= a.id";
		$sql="SElECT * From evenment";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherEvenmentsTrie(){
		//$sql="SElECT * From evenment e inner join formationphp.evenment a on e.id= a.id";
		$sql="SElECT * From evenment order by nbr_invt";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvenment($id){
		$sql="DELETE FROM evenment where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEvenment($evenment,$id){
		$sql="UPDATE evenment SET id=:idd,nbr_invt=:nbr_invt,nom_evn=:nom_evn,date_evn=:date_evn,type_evn=:type_evn WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$evenment->getId();
        $nbr_invt=$evenment->getNbr();
        $nom_evn=$evenment->getNom();
        $date_evn=$evenment->getDate_evn();
        $type_evn=$evenment->getType_evn();

		$datas = array(':idd'=>$idd, ':id'=>$id, ':nbr_invt'=>$nbr_invt,':nom_evn'=>$nom_evn,':date_evn'=>$date_evn, 'type_evn'=>$type_evn);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nbr_invt',$nbr_invt);
		$req->bindValue(':nom_evn',$nom_evn);
		$req->bindValue(':date_evn',$date_evn);
				$req->bindValue(':type_evn',$type_evn);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEvenment($id){
		$sql="SELECT * from evenment where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	
	
	
	
	
	
	/*	function loginusers($mail, $mdp)
	
    {

        $sql = "SElECT * From user where username='" . $mail . "' and password='" . $mdp . "'";
        $db = config::getConnexion();
        try {
			 $req=$db->prepare($sql);
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	}*/






	






	
	
}

?>