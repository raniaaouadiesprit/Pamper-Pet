<?PHP
include "../Model/promotion.php";
include "../Controller/promotionC.php";





$datedebut=$_POST['date_debut'];
$datefin=$_POST['date_fin'];
$today = date("Y-m-d ");
if (($datedebut>$datefin) or ($datedebut<$today)){
    echo "<h4> date début doit etre supérieur à date fin <br> date début doit etre supérieur à date d'aujourd'hui ($today) <br> <a href='ajouterPromotion2.php'>ressayer encore  </a> </h4>";

}else{





if ( isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['idArticle']) and isset($_POST['nouv_prix']) ){
$promotion1=new promotion($_POST['date_debut'],$_POST['date_fin'],$_POST['idArticle'],$_POST['nouv_prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promotion1C=new PromotionC();
$promotion1C->ajouterPromotion($promotion1);
 header('Location: afficherPromotion1.php');
	
}else{
	echo "vérifier les champs";
}
}
//*/

?>