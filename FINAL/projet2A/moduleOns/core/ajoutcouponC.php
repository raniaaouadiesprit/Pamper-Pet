<?PHP
session_start(); 

include 'CouponC.php';
include '../entities/coupon.php';


if (isset($_POST['code'],$_POST['pourcentage'])) {
$core=new couponc();
$coupon=new coupon($_POST['code'],1,$_POST['pourcentage']);
$core->AjouterCoupon($coupon);

  


 
header('Location: ../thankyou.php');

      
}else{
	echo "vérifier les champs";
}


?>