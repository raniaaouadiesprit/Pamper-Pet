<?PHP
include "../config.php";
class LivraisonC {
function afficherlivraison ($livraison){
		echo "id_livraison: ".$livraison->getid_livraison()."<br>";
		echo "id_livreur: ".$livraison->getid_livreur()."<br>";
		echo "destination: ".$livraison->getdestination()."<br>";
		echo "date: ".$livraison->getdate()."<br>";
		echo "id_commande: ".$livraison->getid_commande()."<br>";
	}

	function ajouterlivraison($livraison){
		$sql="insert into livraison (id_livreur,destination,date,id_commande) values (:id_livreur,:destination,NOW(),:id_commande)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		

        $id_livreur=$livraison->getid_livreur();
        $destination=$livraison->getdestination();

        $id_commande=$livraison->getid_commande();

		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':destination',$destination);

		$req->bindValue(':id_commande',$id_commande);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherlivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.id_livraison= a.livraison";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($id_livraison){
		$sql="DELETE FROM livraison where id_livraison= :id_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livraison',$id_livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id_livraison){
		$sql="UPDATE livraison SET id_livraison=:id_livraisonn,id_livreur=:id_livreur, destination=:destination,date=:date,id_commande=:id_commande WHERE id_livraison=:id_livraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_livraisonn=$livraison->getid_livraison();
		$id_livreur=$livraison->getid_livreur();
        $destination=$livraison->getdestination();
        $date=$livraison->getdate();
        $id_commande=$livraison->getid_commande();
		$datas = array(':id_livraisonn'=>$id_livraisonn, ':id_livraison'=>$id_livraison,':id_livreur'=>$id_livreur, ':destination'=>$destination,':date'=>$date,':id_commande'=>$id_commande);
		$req->bindValue(':id_livraisonn',$id_livraisonn);
		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':destination',$destination);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_commande',$id_commande);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
function recupererlivraison($id_livraison){
		$sql="SELECT * from livraison where id_livraison=$id_livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function recupererlivreur(){
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
	function rechercherListelivraison($id_Livraison){
		$sql="SELECT * from livraison where id_Livraison=$id_Livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());

	        }
	}
	 function recherche($search_value)
        {
            $sql="SELECT * FROM livraison where id_livraison like '$search_value' ";
    
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