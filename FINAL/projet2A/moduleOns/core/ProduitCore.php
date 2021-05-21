
<?PHP
include_once "config.php";

class ProduitCore
{
	function afficherProduit()
	{ 
       
        $sql= "SELECT* From Produit order by Nom "; 
        $db= config::getConnection();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
    
   

    function rechercheProduit($id){
        $sql="SELECT * FROM products where product_id='$id'";
        $db = config::getConnexion();
        try{
            $Produit=$db->query($sql);
            return $Produit;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    } 
}