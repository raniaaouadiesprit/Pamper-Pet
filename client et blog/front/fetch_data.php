<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=markting", "root", "");

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM produit
	";
	if(isset($_POST["typee"]))
	{
		$type_filter = implode("','", $_POST["typee"]);
		$query .= "
		 WHERE type IN('".$type_filter."')
		";
	}
	if(isset($_POST["nom_categorie"]))
	{
		$cat_filter = implode("','", $_POST["nom_categorie"]);
		$query .= "
		 WHERE nom_categorie IN('".$cat_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="images/prod_2.png" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#">'. $row['nom_produit'] .'</a></h2>
                <strong class="item-price">'. $row['type'] .'</strong>
              </div>


			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>