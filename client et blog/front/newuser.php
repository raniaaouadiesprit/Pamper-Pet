 <?php
   $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn =mysql_connect($servername, $username, $password);
$sql=mysql_select_db ('pamperpet',$conn);
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cin=$_POST['cin'];
$mdp=$_POST['mdp'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$x="INSERT INTO() VALUES()";
$y=
   ?>