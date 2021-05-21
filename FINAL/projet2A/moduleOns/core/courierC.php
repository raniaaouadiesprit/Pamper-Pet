<?PHP
function wh_log($log_msg)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) 
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "config.php";

class CourierC {
	function facture($code){
		$cour="livre";
		$d="return";
$t=1;
		$sql="SELECT * from courier c INNER JOIN client cc ON c.id_client = cc.id AND c.id_client='$code' AND c.vis='$t' AND (etat='$cour' OR etat='$d')";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function facturelivre($id){
	$t=1;
		$livre="livre";
			$sql="SElECT COUNT(*) As livre From courier where id_client='$id' and etat='$livre' and vis='$t'";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			$livre = $liste->fetch();
			return $livre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
		function facturereturn($id){
			$t=1;
		$return="return";
			$sql="SElECT COUNT(*) As ret From courier where id_client='$id' and etat='$return' and vis='$t'";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			$return = $liste->fetch();
			return $return;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
	
function afficherCourier ($courier){
		echo "Code: ".$courier->getCode()."<br>";
		echo "Nom Complet: ".$courier->getNomcomplet()."<br>";
		echo "Gouvernerat: ".$courier->getGouvernerat()."<br>";
		echo "Ville: ".$courier->getVille()."<br>";
		echo "Adresse: ".$courier->getAdresse()."<br>";
		echo "Tel: ".$courier->getTel()."<br>";
		echo "Comment: ".$courier->getComment()."<br>";
		echo "Nombre: ".$courier->getNbre()."<br>";
		echo "Prix: ".$courier->getPrix()."<br>";
		echo "Etat: ".$courier->getEtat()."<br>";
		echo "Date: ".$courier->getDate()."<br>";

	}
	function prixtotal($courier){
		echo $courier->getNbre() * $courier->getPrix();
	}
	function ajouterCourier($courier){
	    	    $id=$_SESSION["ID"];
		$sql="insert into courier (nomcomplet,gouvernerat,ville,adresse,tel,comment,nbre,prix,date,etat,id_client) values (:nomcomplet,:gouvernerat,:ville,:adresse,:tel,:comment,:nbre,:prix,:date,:etat,'$id')";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		

        $nomcomplet=$courier->getNomcomplet();
        $gouvernerat=$courier->getGouvernerat();
        $ville=$courier->getVille();
        $adresse=$courier->getAdresse();
		$tel=$courier->getTel();
		$comment=$courier->getComment();
		$nbre=$courier->getNbre();
		$prix=$courier->getPrix();
		$etat=$courier->getEtat();
		$date=$courier->getDate();

		$req->bindValue(':etat',$etat);
		$req->bindValue(':date',$date);
		$req->bindValue(':nomcomplet',$nomcomplet);
		$req->bindValue(':gouvernerat',$gouvernerat);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':comment',$comment);
		$req->bindValue(':nbre',$nbre);
		$req->bindValue(':prix',$prix);

			$req->execute();
			$b = "Le Client " . $id . " A Ajouté Un Colis, nom :" . $nomcomplet . " gouvernerat: " . $gouvernerat . " ville: " . $ville. " adresse: " . $adresse. " tel: " . $tel
			. " comment: " . $comment. " nbre: " . $nbre. " prix: " . $prix. " date: " . date("Y/m/d") . " " . date("h:i:sa") ;
			wh_log($b);

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCouriers(){
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}	
		function afficherattent(){
$attent="en-attent";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
	
	
			function afficherstock(){
$attent="en-stock";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
	
	
				function afficherlivre(){
$attent="livre";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
	
	
					function afficherencour(){
$attent="en-cour";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
						function afficherreturn(){
$attent="return";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
							function afficherpayer(){
$attent="payer";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
	
								function affichernr1(){
$attent="nr1";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
									function affichernr2(){
$attent="nr2";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
										function afficherreturned(){
$attent="returned";
	    $id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
		
	function afficherManifest($date){
		$id=$_SESSION["ID"];

		$sql="SElECT * From courier where id_client='$id' and date='$date'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
}
function afficherManifeste(){
	$id=$_SESSION["ID"];
	$attent="en-attent";
	$sql="SElECT * From courier where id_client='$id' and etat='$attent'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

	function countenattent(){
		$id=$_SESSION["ID"];
$attent="en-attent";
		$sql="SElECT COUNT(*) As attent From courier where id_client='$id' and etat='$attent'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$attent = $liste->fetch();
		return $attent;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
}
function countenstock(){
	$id=$_SESSION["ID"];
$stock="en-stock";
	$sql="SElECT COUNT(*) As stock From courier where id_client='$id' and etat='$stock'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$stock = $liste->fetch();
	return $stock;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

function countencour(){
	$id=$_SESSION["ID"];
$cour="en-cour";
	$sql="SElECT COUNT(*) As cour From courier where id_client='$id' and etat='$cour'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$cour = $liste->fetch();
	return $cour;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

function countlivre(){
	$id=$_SESSION["ID"];
$livre="livre";
	$sql="SElECT COUNT(*) As livre From courier where id_client='$id' and etat='$livre'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$livre = $liste->fetch();
	return $livre;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

function countreturn(){
	$id=$_SESSION["ID"];
$return="return";
	$sql="SElECT COUNT(*) As ret From courier where id_client='$id' and etat='$return'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$return = $liste->fetch();
	return $return;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

function countnr(){
	$id=$_SESSION["ID"];
$nr="payer";
	$sql="SElECT COUNT(*) As nr From courier where id_client='$id' and etat='$nr'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$nr = $liste->fetch();
	return $nr;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function countnr1(){
	$id=$_SESSION["ID"];
$nr="nr1";
	$sql="SElECT COUNT(*) As nr From courier where id_client='$id' and etat='$nr'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$nr1 = $liste->fetch();
	return $nr1;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function countnr2(){
	$id=$_SESSION["ID"];
$nr="nr2";
	$sql="SElECT COUNT(*) As nr From courier where id_client='$id' and etat='$nr'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$nr2 = $liste->fetch();
	return $nr2;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
function countreturned(){
	$id=$_SESSION["ID"];
$nr="returned";
	$sql="SElECT COUNT(*) As nr From courier where id_client='$id' and etat='$nr'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	$returned = $liste->fetch();
	return $returned;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}


	function supprimerCourier($code){
		$id=$_SESSION["ID"];

		$sql="DELETE FROM courier where code= :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
			$req->execute();
			$b = "Le Client " . $id . " A Supprimer le Colis num " .$code ;
			wh_log($b);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	
	}


	
    function modifierCourier($courier,$code){
		$id=$_SESSION["ID"];

        $db = config::getConnexion();
        try{
    
            
            
			$nomcomplet=$courier->getNomcomplet();
			$gouvernerat=$courier->getGouvernerat();
			$ville=$courier->getVille();
			$adresse=$courier->getAdresse();
			$tel=$courier->getTel();
			$comment=$courier->getComment();
			$nbre=$courier->getNbre();
			$Prix=$courier->getPrix();
			$sql="UPDATE courier SET tel='$tel',nomcomplet='$nomcomplet',gouvernerat='$gouvernerat',ville='$ville',adresse='$adresse',comment='$comment',nbre='$nbre',prix='$Prix' WHERE code='$code'";
            $req=$db->prepare($sql);
			$req->bindValue(':tel',$tel);
            $req->bindValue(':nbre',$nbre);
            $req->bindValue(':ville',$ville);
            $req->bindValue(':prix',$Prix);
            
			$req->execute();
			$b = "Le Client " . $id . " A Modifier le Colis num " .$code . " , nom :" . $nomcomplet . " gouvernerat: " . $gouvernerat . " ville: " . $ville. " adresse: " . $adresse. " tel: " . $tel
			. " comment: " . $comment. " nbre: " . $nbre. " prix: " . $prix. " date: " . date("Y/m/d") . " " . date("h:i:sa") ;
			wh_log($b);
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
        
    }
	function rechercheCourier($code){
		$sql="SELECT * from courier where code='$code'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

} ?>