<?PHP
include "../../Model/CategorieX.php";
include "../../Controller/Categorie.php";


if (isset($_POST['modifier'])){

	$Categorie1C=new CategorieC();
	echo $_POST['idCategorie '];
	$Categorie1=new Categorie($_POST['NomCategorie']);


    $Categorie1C->modifierCategorie($Categorie1,$_POST['idCategorie']);

    header('Location: ../ltr/AffichageCategorie.php');


}
?>