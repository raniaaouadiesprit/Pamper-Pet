<?PHP
include "../config.php";
class LivreurC {
function afficherlivreur ($livreur){
		echo "id_livreur: ".$livreur->getid_livreur()."<br>";
		echo "nom: ".$livreur->getnom()."<br>";
		echo "prenom: ".$livreur->getprenom()."<br>";
		echo "numero: ".$livreur->getnumero()."<br>";
		echo "id_livraison: ".$livreur->getid_livraison()."<br>";
	}

	function ajouterlivreur($livreur){
		$sql="insert into livreur (id_livreur,nom,prenom,numero,id_livraison) values (:id_livreur, :nom,:prenom,:numero, :id_livraison)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livreur=$livreur->getid_livreur();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnumero();
        $id_livraison=$livreur->getid_livraison();
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':id_livraison',$id_livraison);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.id_livreur= a.livreur";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($id_livreur){
		$sql="DELETE FROM livreur where id_livreur= :id_livreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livreur',$id_livreur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$id_livreur){
		$sql="UPDATE livreur SET id_livreur=:id_livreurr, nom=:nom,prenom=:prenom,numero=:numero,id_livraison=:id_livraison WHERE id_livreur=:id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_livreurr=$livreur->getid_livreur();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnumero();
		$datas = array(':id_livreurr'=>$id_livreurr, ':id_livreur'=>$id_livreur, ':nom'=>$nom,':prenom'=>$prenom,':numero'=>$numero,':id_livraison'=>$id_livraison);
		$req->bindValue(':id_livreurr',$id_livreurr);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':id_livraison',$id_livraison);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	} 
function recupererlivreur($id_livreur){
		$sql="SELECT * from livreur where id_livreur=$id_livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreur($id_livreur){
		$sql="SELECT * from livreur where id_livreur=$id_livreur";
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