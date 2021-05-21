<?PHP
include "../Model/livreur.php";
include "../Controller/livreurC.php";

if ( isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['prenom']) and isset($_POST['numero']) and isset($_POST['image'])){

$livreur1=new livreur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['image']);

//Partie2
/*
 *
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