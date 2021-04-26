<?PHP
include "../config.php";
    class ArticleC {


        function afficherArticle(){

        $sql="SElECT * From article";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
 
        function ajouterArticle($article){
        $sql="insert into article (Nom_article,Quantite,Description_article,Nom_fabriquant,NomCategorie) values (:Nom_article, :Quantite,:Description_article,:Nom_fabriquant,:NomCategorie)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $Nom_article=$article->getNom_article();
        $Quantite=$article->getQuantite();
        $Description_article=$article->getDescription();
        $Nom_fabriquant=$article->getFabriquant();
        $NomCategorie=$article->getNomCategorie();
 
        $req->bindValue(':Nom_article',$Nom_article);
        $req->bindValue(':Quantite',$Quantite);
        $req->bindValue(':Description_article',$Description_article);
        $req->bindValue(':Nom_fabriquant',$Nom_fabriquant);
        $req->bindValue(':NomCategorie',$NomCategorie);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    
    function supprimerArticle($idArticle){
        $sql="DELETE FROM article where idArticle= :idArticle";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idArticle',$idArticle);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierArticle($article,$idArticle){
        $sql="UPDATE article SET  Nom_article=:Nom_article,Quantite=:Quantite,Description_article=:Description_article,Nom_fabriquant=:Nom_fabriquant,NomCategorie=:NomCategorie WHERE idArticle=:idArticle";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $Nom_article=$article->getNom_article();
        $Quantite=$article->getQuantite();
        $Description_article=$article->getDescription();
        $Nom_fabriquant=$article->getFabriquant();
        $NomCategorie=$article->getNomCategorie();

        $req->bindValue(':idArticle',$idArticle);
        $req->bindValue(':Nom_article',$Nom_article);
        $req->bindValue(':Quantite',$Quantite);
        $req->bindValue(':Description_article',$Description_article);
        $req->bindValue(':Nom_fabriquant',$Nom_fabriquant);
        $req->bindValue(':NomCategorie',$NomCategorie);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();


        }
        
    }

        function recupererDataArticle($idArticle){
        $sql="SELECT * from article where idArticle=$idArticle";
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