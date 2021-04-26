<HTML>
<head>
</head>
<body>
<?PHP
include "../models/livreur.php";
include "../controller/livreurC.php";
if (isset($_GET['id_livreur'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['id_livreur']);
	foreach($result as $row){
		$id_livreur=$row['id_livreur'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$numero=$row['numero'];
		$id_livraison=$row['id_livraison'];

?>
<form method="POST">
<table>
<caption>Modifier livreur</caption>
<tr>
<td>id_livreur</td>
<td><input type="number" name="id_livreur" value="<?PHP echo $id_livreur ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td>id_livraison</td>
<td><input type="number" name="id_livraison" value="<?PHP echo $id_livraison ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livreur_ini" value="<?PHP echo $_GET['id_livreur'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['id_livreur'],$_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['id_livraison']);
	$livreurC->modifierlivreur($livreur,$_POST['id_livreur_ini']);
	echo $_POST['id_livreur_ini'];
	header('Location: afficherlivreur.php');
}
?>
</body>
</HTMl>