<?PHP
session_start(); 
include 'CmdC.php';
include '../entities/cmd.php';
include 'CouponC.php';
include '../entities/coupon.php';

$_SESSION['email']="ons.diweni@esprit.tn";
if (isset($_POST['id_user'],$_POST['total'])) {
$core=new couponc();
$coupon=$core->rechercheCoupon($_POST['coupon']);
if (isset($_POST['coupon'])) {
foreach($coupon as $row) {
if($row['Valid']==1){
    $newtotal=($_POST['total']/100)*(100-$row['pourcentage']);
    $Cmd=new cmd($_POST['id_user'],$newtotal);
}}}
if (!isset($Cmd)) {
    $Cmd=new cmd($_POST['id_user'],$_POST['total']);
}
$CmdC=new CmdC();
$id=$CmdC->ajoutercmd($Cmd);
    if(isset($_POST['prod1']))
    { 
        $CmdC->ajouterprodcmd($id,$_POST['prod1'],$_POST['qty1']); 
    }
    if(isset($_POST['prod2']))
    { 
        $CmdC->ajouterprodcmd($id,$_POST['prod2'],$_POST['qty2']); 
    }
    if(isset($_POST['prod3']))
    { 
        $CmdC->ajouterprodcmd($id,$_POST['prod3'],$_POST['qty3']); 
    }
    if(isset($_POST['prod4']))
    { 
        $CmdC->ajouterprodcmd($id,$_POST['prod4'],$_POST['qty4']); 
    }



    $receiver = $_SESSION['email'];
$subject = " Bon De Commande";
$body .= "CMD: ".$id."\r\n";
if(isset($_POST['prod1']))
{ 
    $body .= "Produit id: ".$_POST['prod1']."\r\n";
}
if(isset($_POST['prod2']))
{ 

    $body .= "Produit id: ".$_POST['prod2']."\r\n";
}
if(isset($_POST['prod3']))
{ 
    $body .= "Produit id: ".$_POST['prod3']."\r\n";

}
if(isset($_POST['prod4']))
{ 
    $body .= "Produit id: ".$_POST['prod4']."\r\n";

}

$body .= "Total: ".$_POST['total']."\r\n";
$sender = "From:diweniio@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}

header('Location: ../thankyou.php');
 
      
}else{
	echo "vérifier les champs";
}


?>