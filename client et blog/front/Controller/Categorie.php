<?PHP
include "../config.php";
    class CategorieC {


        function afficherCategorie(){

        $sql="SElECT * From categorie";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

      function ajouterCategorie($Categorie){
        $sql="insert into categorie (NomCategorie) values (:NomCategorie)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $NomCategorie=$Categorie->getNomCategorie();

 
        $req->bindValue(':NomCategorie',$NomCategorie);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    function supprimerCategorie($idCategorie){
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
    



    }