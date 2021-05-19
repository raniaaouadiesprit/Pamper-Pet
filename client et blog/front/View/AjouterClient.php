<?PHP
include_once '../Model/ClientX.php';
include_once '../Controller/Client.php';



if (isset($_POST['NomClient']) and isset($_POST['PrenomClient']) and isset($_POST['IdClient']) and isset($_POST['MdpClient']) and isset($_POST['AdresseClient']) and isset($_POST['EmailClient']) and isset($_POST['TelClient']) ){
$Client1=new Client($_POST['NomClient'],$_POST['PrenomClient'],$_POST['IdClient'],$_POST['MdpClient'],$_POST['AdresseClient'],$_POST['EmailClient'],$_POST['TelClient']);




$Client1C=new ClientC();
$Client1C->ajouterClient($Client1);

header('Location: ../view/merci.php');

}else{
	echo "vérifier les champs";
}
//*/

?>