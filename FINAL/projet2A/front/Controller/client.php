<?PHP
include "../../config.php";
    class ClientC {


        function afficherClient(){

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

      function ajouterClient($client){
        $sql="insert into client (NomClient,PrenomClient,IdClient,MdpClient,AdresseClient,EmailClient,TelClient) values (:NomClient, :PrenomClient,:IdClient,:MdpClient,:AdresseClient,:EmailClient,:TelClient)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $NomClient=$client->getNomClient();
        $PrenomClient=$client->getPrenomClient();
        $IdClient=$client->getIdClient();
        $MdpClient=$client->getMdpClient();
        $AdresseClient=$client->getAdresseClient();
        $EmailClient=$client->getEmailClient();
        $TelClient=$client->getTelClient();
 
        $req->bindValue(':NomClient',$NomClient);
        $req->bindValue(':PrenomClient',$PrenomClient);
        $req->bindValue(':IdClient',$IdClient);
        $req->bindValue(':MdpClient',$MdpClient);
        $req->bindValue(':AdresseClient',$AdresseClient);
        $req->bindValue(':EmailClient',$EmailClient);
        $req->bindValue(':TelClient',$TelClient);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    /*function supprimerCategorie($idCategorie){
        $sql="DELETE FROM categorie where idCategorie= :idCategorie";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idCategorie',$idCategorie);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierCategorie($Categorie,$idCategorie){
        $sql="UPDATE categorie SET  NomCategorie=:NomCategorie WHERE idCategorie=:idCategorie";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $NomCategorie=$Categorie->getNomCategorie();
  
        $req->bindValue(':idCategorie',$idCategorie);
        $req->bindValue(':NomCategorie',$NomCategorie);

        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();


        }
        
    }

       function recupererDataCategorie($idCategorie){
        $sql="SELECT * from categorie where idCategorie=$idCategorie";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    


*/
    }