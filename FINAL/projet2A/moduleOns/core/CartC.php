<?PHP
include "config.php";

class CartC {


    function affichercart(){
	    $id=-1;//$_SESSION["ID"];
        $ip=$_SERVER['REMOTE_ADDR'];
        $sql="SELECT * from cart c INNER JOIN products cc ON c.p_id = cc.product_id AND (c.ip_add='$ip' OR c.user_id='$id')";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
    
    
    function supprimercart($id){
	//	$id=$_SESSION["ID"];

		$sql="DELETE FROM cart where id='$id'";
        $db = config::getConnexion();
		try{
		$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
    
    function increment_qty($id){
        //	$id=$_SESSION["ID"];
            $sql="UPDATE cart SET qty = qty + 1 where id='$id'";
            $db = config::getConnexion();
            try{
            $db->query($sql);
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function decrement_qty($id){
            //	$id=$_SESSION["ID"];
                $sql="UPDATE cart SET qty = qty - 1 where id='$id'";
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
