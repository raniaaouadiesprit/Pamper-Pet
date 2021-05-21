<?PHP
session_start(); 
if (isset($_GET["id"])){
if($_GET["id"]==1){
	$_SESSION['cart1']="1";$_SESSION['qty1']="1";
}
if($_GET["id"]==2){
	$_SESSION['cart2']="2";$_SESSION['qty2']="1";
}
if($_GET["id"]==3){
	$_SESSION['cart3']="3";$_SESSION['qty3']="1";
}
if($_GET["id"]==4){
	$_SESSION['cart4']="4";$_SESSION['qty4']="1";
}
	header('Location: ../produit.php');

}
?>

