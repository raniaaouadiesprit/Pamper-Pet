<?PHP
include "../../Model/ArticleX.php";
include "../../Controller/Article.php";


if (isset($_POST['modifier'])){
		$Article1C=new ArticleC();
	echo $_POST['idArticle'];
	$Article1=new Article($_POST['Nom_article'],$_POST['Quantite'],$_POST['Description_article'],$_POST['Nom_fabriquant'],$_POST['NomCategorie'],$_POST['Photo'],$_POST['Prix']);


    $Article1C->modifierArticle($Article1,$_POST['idArticle']);

    header('Location: ../ltr/AffichageArticle.php');


}
?>