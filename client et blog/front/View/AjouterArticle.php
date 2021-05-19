<?PHP
include_once '../Model/ArticleX.php';
include_once '../Controller/Article.php';



if (isset($_POST['Nom_article']) and isset($_POST['Quantite']) and isset($_POST['Description_article']) and isset($_POST['Nom_fabriquant']) and isset($_POST['NomCategorie']) ){
$Article1=new Article($_POST['Nom_article'],$_POST['Quantite'],$_POST['Description_article'],$_POST['Nom_fabriquant'],$_POST['NomCategorie']);




$Article1C=new ArticleC();
$Article1C->ajouterArticle($Article1);

header('Location: ../pages/AffichageArticle.php');

echo "c bon";
}else{
	echo "vérifier les champs";
}
//*/

?>