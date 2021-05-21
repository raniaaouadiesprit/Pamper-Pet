<?PHP
session_start(); 
if (isset($_GET["id"])){
if($_GET["id"]==1){
	$_SESSION['qty1']++;
}
if($_GET["id"]==2){
	$_SESSION['qty2']++;
}
if($_GET["id"]==3){
	$_SESSION['qty3']++;
}
if($_GET["id"]==4){
	$_SESSION['qty4']++;
}
	header('Location: ../panier.php');
}

?>
