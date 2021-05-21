<?PHP
include "config.php";

class CmdC {
	function ajoutercmd($cmd){
$sql="insert into commande (total,user_id,etat) values (:total,:id_user,:etat)";
$db = config::getConnexion();
try{
$req=$db->prepare($sql);
$etat="Non Valid";
$id_user=$cmd->getuser();
$total=$cmd->gettotal();

$req->bindValue(':etat',$etat);
$req->bindValue(':id_user',$id_user);
$req->bindValue(':total',$total);

    $req->execute();
    $last_id = $db->lastInsertId();
    return $last_id;

}
catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}

function ajouterprodcmd($id_cmd,$id_prod,$qty){
    $sql="insert into cmd_produit (id_cmd,id_produit,qty) values (:id_cmd,:id_produit,:qty)";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);

    
    $req->bindValue(':qty',$qty);
    $req->bindValue(':id_cmd',$id_cmd);
    $req->bindValue(':id_produit',$id_prod);
    
        $req->execute();
    
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    }
    function affichercmd(){
        $sql="SELECT * from commande c INNER JOIN user_info cc ON c.user_id = cc.user_id ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
    function recherchecmd($id){
        $sql="SELECT * FROM cmd_produit where id_cmd='$id'";
        $db = config::getConnexion();
        try{
            $Produit=$db->query($sql);
            return $Produit;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

    function validerCmd($id){
        $sql="UPDATE commande
        SET etat='Valid'
        WHERE id_commande='$id';";
        
        $db = config::getConnexion();
        try{
            $db->query($sql);
            
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }
    
    function supprimerCmd($id){
        $sql="DELETE FROM commande
        WHERE id_commande='$id';";
        
        $db = config::getConnexion();
        try{
            $db->query($sql);
            
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }



}
?>
