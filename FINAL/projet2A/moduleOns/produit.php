<?php session_start(); ?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Pamper Pet</title>
		<link rel="stylesheet" href="./a_files/bootstrap.min.css">
		<script src="./a_files/jquery2.js.download"></script>
		<script src="./a_files/bootstrap.min.js.download"></script>
		<script src="./a_files/main.js.download"></script>

		<link rel="stylesheet" type="text/css" href="./a_files/style.css">
		<style></style>
	</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

		
			<ul class="nav navbar-nav navbar-right">
				</li><li><a href="panier.php" class="cart"><span></span>Cart<span class="badge"></span></a>
				</li>
				
				
			</ul>
		</div>
	</div>
	
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg"></div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
				<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Royal Canin</div>
								<div class="panel-body">
									<img src="product_images/royal.jpg" style="width:160px; height:250px;">
								</div>

								<div class="panel-heading">20.00 DT
								<td><a href=" core/ajoutpanier.php?id=1" style="float:right;"  class="btn btn-danger btn-xs">
								AddToCart</a class="btn btn-primary height-auto btn-sm"></td>

								</div>
								
							</div>
							
						</div>	
			
				<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Litière minérale</div>
								<div class="panel-body">
									<img src="product_images/litere.jpg" style="width:160px; height:250px;">
								</div>

								<div class="panel-heading">5.00 DT
								
									<td><a href=" core/ajoutpanier.php?id=2" style="float:right;"  class="btn btn-danger btn-xs">
								AddToCart</a class="btn btn-primary height-auto btn-sm"></td>
								</div>
								
							</div>
							
						</div>	
			
				<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Cage Evoque Medium</div>
								<div class="panel-body">
									<img src="product_images/cage.png" style="width:160px; height:250px;">
								</div>

								<div class="panel-heading">20.00 DT
								
								<td><a href=" core/ajoutpanier.php?id=3" style="float:right;" class="btn btn-danger btn-xs">
								AddToCart</a class="btn btn-primary height-auto btn-sm"></td>
								</div>
								
							</div>
							
						</div>	
			
				<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Croquettes Chien</div>
								<div class="panel-body">
									<img src="product_images/croq.jpg" style="width:160px; height:250px;">
								</div>

								<div class="panel-heading">2.00 DT
								
								<td><a href=" core/ajoutpanier.php?id=4" style="float:right;" class="btn btn-danger btn-xs">
								AddToCart</a class="btn btn-primary height-auto btn-sm"></td>
								</div>
								
							</div>
							
						</div>	
			





</div>
			
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


















































</div></body></html>