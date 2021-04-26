<HTML>
<head>
</head>
<div class="imprimer">
        <input id="impression" name="impression" class="btn btn-primary" type="submit" onclick="imprimer_page()" value="Imprimer la Page" />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

<br><br><br>
<body>
<?PHP
include "../models/livraison.php";
include "../controller/livraisonC.php";
if (isset($_GET['id_livraison'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_GET['id_livraison']);
	foreach($result as $row){
		$id_livraison=$row['id_livraison'];
		$destination=$row['destination'];
		$date=$row['date'];
		$id_commande=$row['id_commande'];

?>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>id_livraison</td>
<td><input type="number" name="id_livraison" value="<?PHP echo $id_livraison ?>"></td>
</tr>
<tr>
<td>destination</td>
<td><input type="text" name="destination" value="<?PHP echo $destination ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>id_commande</td>
<td><input type="number" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livraison_ini" value="<?PHP echo $_GET['id_livraison'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['id_livraison'],$_POST['destination'],$_POST['date'],$_POST['id_commande']);
	$livraisonC->modifierlivraison($livraison,$_POST['id_livraison_ini']);
	echo $_POST['id_livraison_ini'];
	header('Location: afficherlivraison.php');
}
?>
</body>
</HTMl>