<?PHP
session_start(); 
if (isset($_GET["id"])){
if($_GET["id"]==1){
	unset($_SESSION['cart1']);
}
if($_GET["id"]==2){
	unset($_SESSION['cart2']);
}
if($_GET["id"]==3){
	unset($_SESSION['cart3']);
}
if($_GET["id"]==4){
	unset($_SESSION['cart4']);
}
	header('Location: ../panier.php');

}
?>