<?PHP
include "../Controller/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["id_livreur"])){
	$livreurC->supprimerlivreur($_POST["id_livreur"]);
	header('Location: afficherlivreur.php');
}

?>