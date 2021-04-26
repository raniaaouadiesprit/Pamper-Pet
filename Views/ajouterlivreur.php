<?PHP
include "../models/livreur.php";
include "../controller/livreurC.php";

if (isset($_POST['id_livreur']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numero']) and isset($_POST['id_livraison'])){
$livreur1=new livreur($_POST['id_livreur'],$_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['id_livraison']);
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: ajouterLivreur.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>