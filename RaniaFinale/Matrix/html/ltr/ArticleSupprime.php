<?PHP
include "../../Model/ArticleX.php";
include "../../Controller/Article.php";


$Article1C=new ArticleC();

if (isset($_POST["idArticle"])){
	$Article1C->supprimerArticle($_POST["idArticle"]);

header('Location: ../ltr/AffichageArticle.php');
}



?>