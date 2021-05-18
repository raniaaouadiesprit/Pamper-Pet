<?PHP
include "../../Model/ArticleX.php";
include "../../Controller/Article.php";

$Article1C=new ArticleC();
$listeArticle=$Article1C->afficherArticle();

//var_dump($listeEmployes->fetchAll());
?>

<!---------------------------------------------------------------------------------------->
<!---------------------------------START STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->
<?Php
$host_name = "localhost";
$database = "rania"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);



if (!$connection) 
{
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}


if($stmt = $connection->query("SELECT Nom_article,Quantite  FROM article"))

{

$php_data_array = Array(); // create PHP array
while ($row = $stmt->fetch_row()) 
   {
   $php_data_array[] = $row; // Adding to array
   }
}
else
{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 


// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";



?>

<!---------------------------------------------------------------------------------------->
<!--------------------------------- END STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->




<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Stock </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="AffichageArticle.php" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Article </span></a>
                                </li>
                                <li class="sidebar-item"><a href="AffichageCategorie.php" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Categorie
                                        </span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
				
					                        <!-- ============================================================== -->
                        <!-- bar chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Stat Article</h5>
                                <div class="card-body">
                                    <div class="spark-chart">
<!------------------------------------------------------------------------------------------------>
<!---------------------------------------affichage stat Produit--------------------------------->
                                         <div id="chart_div"></div>
  <!------------------------------------------------------------------------------------------------>                                       
<!------------------------------------------------------------------------------------------------>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end bar chart  -->
                        <!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<input class="btn btn-secondary" type="submit" id="impression" name="impression" onclick="imprimer_page()" value="imprimer la page" class=" btn btn-theme btn-lg">
</div>
<script type="text/javascript">
function imprimer_page(){
    window.print();
}
</script> 
</div></div>



<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h4 class="card-header-title ">Tableau Article</h4>

                                        <div class="toolbar card-toolbar-tabs  ml-auto">

           



                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
									

                                    <div class="card-body">
									<button onclick="location.href='AjouterArticle.html'" type="button" class="btn btn-primary">
         Ajouter un Article</button>
															

     
     <form method="POST" action=""> 
     <input  type="text" name="recherche" placeholder="Saisie un mot 🔍">
     <input type="SUBMIT" value="Search!" class="btn btn-secondary"> 
     </form>
     

     <?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'rania';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
     
     // la requete mysql
     $q = $conn->query(
     "SELECT idArticle, Nom_article,Quantite,Prix,Description_article,Nom_fabriquant,NomCategorie FROM article
      WHERE idArticle LIKE '%$recherche%'
      OR Nom_article LIKE '%$recherche%'
	  OR Quantite LIKE '%$recherche%'
      OR Prix LIKE '%$recherche%'
	  OR Description_article LIKE '%$recherche%'
	  OR Nom_fabriquant LIKE '%$recherche%'
	  OR NomCategorie LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
	 if(isset($_POST['recherche']) && !empty($_POST['recherche'])){
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['idArticle'].', '.$r['Nom_article'].', '.$r['Quantite'].', '.$r['Prix'].', '.$r['Description_article'].', '.$r['Nom_fabriquant'].', '.$r['NomCategorie'].' <br />'
;
     }
	 }
?>
									
									
                                       <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                                               <div class="card-body">
											   	
		


<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
     <th><a href="AffichageArticle.php?tri=idArticle">id ⬇️</a></th>
     <th><a href="AffichageArticle.php?tri=Nom_article">Nom ⬇️</a></th>
     <th><a href="AffichageArticle.php?tri=Quantite">Quantite ⬇️</a></th>
     <th><a href="AffichageArticle.php?tri=Prix">Prix ⬇️</a></th>
     <th><a href="AffichageArticle.php?tri=Description_article">Description ⬇️</th>
     <th><a href="AffichageArticle.php?tri=Nom_fabriquant">NomFabriquant ⬇️</th>
     <th><a href="AffichageArticle.php?tri=NomCategorie">NomCategorie ⬇️</th>
      <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php  
$bdd= new PDO('mysql:host=localhost; dbname=rania','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $sql = 'SELECT * FROM article';
      if(isset($_GET['tri']) && !empty($_GET['tri'])){
      $sql .= ' ORDER BY ' . $_GET['tri'];
      }
 
   $article = $bdd->query($sql);
 
   while($row = $article->fetch())    // charge les films 1 par 1 (boucle while)
         {  ?>
      <tr>
       <td> <?php echo $row['idArticle'] ?></td>
       <td> <?php echo $row['Nom_article'] ?></td>
       <td> <?php echo $row['Quantite']  ?> </td>
       <td> <?php echo $row['Prix']  ?> </td>
       <td> <?php echo $row['Description_article'] ?> </td>
       <td> <?php echo $row['Nom_fabriquant']  ?> </td>
	   <td> <?php echo $row['NomCategorie']  ?> </td>

      <td> <img widtd='130px' height='130px' src="../../src/images/<?PHP echo $row['Photo'];  ?>" alt="ATS Classic" /></td>
       

       <td>
 <form method="POST" action="ArticleSupprime.php">  
 <button class="mt-1 btn btn-primary" name="supprimer" onclick="return confirm('Are you sure?')">Supprimer</button>
<input type="hidden" value="<?PHP echo $row['idArticle']; ?>"name="idArticle">
</form>
 <a class="mt-1 btn btn-primary" href="ArticleModifier.php?idArticle=<?PHP echo $row['idArticle']; ?>" style="float:left;">modifier</a>
        </td>
       
   
        
            </tr>
              <?PHP
}
?>
        </tbody>

    </table>



         
                                        
                                    </div>
                                </div>
                            </div>




                        

                    </div>
               
            </div> 
			
					

         
                    <!-- ============================================================== -->
                    <!-- bootstrap select -->
                    <!-- ============================================================== -->
             
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper -->
        <!-- ============================================================== -->
    </div>

<!---------------------------------------------------------------------------------------->
<!---------------------------------JS STAT Article------------------------------------------->
<!---------------------------------------------------------------------------------------->
	

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<body>
    <div style="width:90%; height:500px;" id="columnchart_material" style="width: 1000px; height: 500px;"></div>
</body>
	
	<script type="text/javascript" src="js/loader.js"></script>

<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() 

      {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nom_Article');
        data.addColumn('number', 'Quantite');
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'Statistique de stock des Produits',
                       width:300,
                       height:300,
                      backgroundColor: 'transparent',
                     };

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

       
      }

</script>


<!---------------------------------------------------------------------------------------->
<!---------------------------------JS STAT End------------------------------------------->
<!---------------------------------------------------------------------------------------->
	
	
	
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>