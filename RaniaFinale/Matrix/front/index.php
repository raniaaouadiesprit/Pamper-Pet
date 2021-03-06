<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.html">Home</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="afficherproduits.php">Produit</a></li>

                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Catalogue</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="contact.html">Contact</a></li>
                      <li><a href="avis.html">Avis</a></li>
                 <li><a href="Reclamation.html">Reclamation</a></li>

				 <li><a href="evenment.php">Evenment</a></li>

              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">


            <h2 class="sub-title">#The Lower Price </h2>
            <h1>Buy Now </h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>


            </div>
          </div>
         
<?php  
$bdd= new PDO('mysql:host=localhost; dbname=rania','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $sql = 'SELECT  * FROM article ORDER BY Prix ASC LIMIT 1';
 
   $article = $bdd->query($sql);
 
   while($row = $article->fetch())    // charge les films 1 par 1 (boucle while)
         {  ?>
 <div class="col-lg-4 col-md-6 item-entry mb-4">
   
   <a href="#" class="product-item md-height bg-gray d-block">
      <img  src="../src/images/<?PHP echo $row['Photo'];  ?>" /> </a>  
      <h2 class="item-title"> <a>Nom :  <?php echo $row['Nom_article'] ?></a></h2>
      <strong class="item-price"><p>Prix : <?php  echo $row['Prix']  ?> DT </p></strong>
      <strong class="item-price"><p>Quantite : <?php  echo $row['Quantite']  ?> </p></strong>
      
        

   </div>
              <?PHP
}
?>


        
        </div>
      </div>
    </div>




    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Our Products</h2>
          </div>
        </div>
        <div class="row">

         

			  
            

<?php  
$bdd= new PDO('mysql:host=localhost; dbname=rania','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $sql = 'SELECT * FROM article';
 
   $article = $bdd->query($sql);
 
   while($row = $article->fetch())    // charge les films 1 par 1 (boucle while)
         {  ?>
 <div class="col-lg-4 col-md-6 item-entry mb-4">
   
   <a href="#" class="product-item md-height bg-gray d-block">
      <img  class="img-fluid" src="../src/images/<?PHP echo $row['Photo'];  ?>" /> </a>  
	    <h2 class="item-title"> <a>Nom :  <?php echo $row['Nom_article'] ?></a></h2>
      <strong class="item-price"><p>Prix : <?php  echo $row['Prix']  ?> DT </p></strong>
      <strong class="item-price"><p>Quantite : <?php  echo $row['Quantite']  ?> </p></strong>
		  
        

   </div>
              <?PHP
}
?>


			
        

        </div>
      </div>
    </div>




    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Our New Product</h2>
            <h1>Buy Now</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
      
           



<?php  
$bdd= new PDO('mysql:host=localhost; dbname=rania','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
   $sql = 'SELECT * FROM article WHERE idArticle=(SELECT max(idArticle) FROM article);';
 
   $article = $bdd->query($sql);
 
   while($row = $article->fetch())    // charge les films 1 par 1 (boucle while)
         {  ?>
 <div class="col-lg-4 col-md-6 item-entry mb-4">
         <h2 class="item-title"> <a>Nom :  <?php echo $row['Nom_article'] ?></a></h2>
      <strong class="item-price"><p>Prix : <?php  echo $row['Prix']  ?> DT </p></strong>
      <strong class="item-price"><p>Quantite : <?php  echo $row['Quantite']  ?> </p></strong>
   <a href="#" class="product-item md-height bg-gray d-block">
      <img  src="../src/images/<?PHP echo $row['Photo'];  ?>" /> </a>  

      
        

   </div>
              <?PHP
}
?>




         
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  July 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">1003 Lac 2 . Tunis, TUNISIE</li>
                <li class="phone"><a href="tel://21654231751">+216 54 231 751</a></li>
                <li class="email">shopmax@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>