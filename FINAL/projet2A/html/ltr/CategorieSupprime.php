<?PHP
include "../../Model/CategorieX.php";
include "../../Controller/Categorie.php";


$CategorieC=new CategorieC();

if (isset($_POST["idCategorie"])){
	$CategorieC->supprimerCategorie($_POST["idCategorie"]);

header('Location: ../ltr/AffichageCategorie.php');
}



?>