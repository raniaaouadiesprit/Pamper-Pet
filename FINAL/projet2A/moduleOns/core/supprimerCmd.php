<?PHP
session_start(); 
include 'CmdC.php';
include '../entities/cmd.php';


if (isset($_GET["id"])) {
$CmdC=new CmdC();
$CmdC->supprimerCmd($_GET["id"]);
	
header('Location: ../cmdback.php');
 
      
}else{
	echo "vérifier les champs";
}


?>