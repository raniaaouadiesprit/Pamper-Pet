<?PHP
include "../config.php";
class LivreurC {
function afficherlivreur ($livreur){
		echo "id_livreur: ".$livreur->getid_livreur()."<br>";
		echo "nom: ".$livreur->getnom()."<br>";
		echo "prenom: ".$livreur->getprenom()."<br>";
		echo "numero: ".$livreur->getnumero()."<br>";
		
	}

	function ajouterlivreur($livreur){
		$sql="insert into livreur (nom,prenom,email,numero,image) values (:nom,:prenom,:email,:numero,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $email=$livreur->getEmail();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnumero();
        $image=$livreur->getImage();
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':image',$image);
		

		
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
		$sql="UPDATE livreur SET id_livreur=:id_livreurr, nom=:nom,prenom=:prenom,email=:email,numero=:numero,image=:image WHERE id_livreur=:id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_livreurr=$id_livreur;
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnumero();
        $email=$livreur->getEmail();
        $image=$livreur->getImage();
		$datas = array(':id_livreurr'=>$id_livreurr, ':id_livreur'=>$id_livreur, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':numero'=>$numero,':image'=>$image);
		$req->bindValue(':id_livreurr',$id_livreurr);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
		$req->bindValue(':numero',$numero);
        $req->bindValue(':image',$image);
		
		
		
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
    function recupererLivreures(){
        $sql="SELECT * from livreur ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	public function recherche($search_value)
        {
            $sql="SELECT * FROM livreur where id_livreur like '$search_value' ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

}

?>