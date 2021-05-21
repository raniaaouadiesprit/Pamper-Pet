
<?PHP
include_once "config.php";

class couponc
{

    
   

   
   
   
	function AjouterCoupon($Coupon)
	{
		$sql = "INSERT INTO coupon (code,Valid,pourcentage) values (:code,:Valid,:pourcentage)";
		$db = Config::getConnexion();
		try {

			$req = $db->prepare($sql);

            $code=$Coupon->getCode();
          
            $Valid=$Coupon->getValid();
            
            $pourcentage=$Coupon->getPourcentage();
         
          

           
            $req->bindValue(':code',$code);
            $req->bindValue(':Valid',$Valid);
            $req->bindValue(':pourcentage',$pourcentage);

            
            

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


    function rechercheCoupon($code){
        $sql="SELECT * FROM coupon where code='$code'";
        $db = config::getConnexion();
        try{
            $Coupon=$db->query($sql);
            return $Coupon;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    } 
    
}