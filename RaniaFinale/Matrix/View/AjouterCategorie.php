<?PHP
include "../config.php";
include_once '../Model/CategorieX.php';
include_once '../Controller/Categorie.php';


if (isset($_POST['NomCategorie']))  {
$Categorie1=new Categorie($_POST['NomCategorie']);


$Categorie1C=new CategorieC();
$Categorie1C->ajouterCategorie($Categorie1);

header('Location: ../html/ltr/AffichageCategorie.php');

echo "c bon";
}else{
	echo "vérifier les champs";
}
//*/

?>