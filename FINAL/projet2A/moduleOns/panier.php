<?PHP
session_start(); 
include "core/ProduitCore.php";
$core=new ProduitCore();
    if(isset($_SESSION['cart1']))
    {
      $prod1=$core->rechercheProduit($_SESSION['cart1']);
    }
    if(isset($_SESSION['cart2']))
    {
      $prod2=$core->rechercheProduit($_SESSION['cart2']);
    }
    if(isset($_SESSION['cart3']))
    {
      $prod3=$core->rechercheProduit($_SESSION['cart3']);

    }
    if(isset($_SESSION['cart4']))
    {
      $prod4=$core->rechercheProduit($_SESSION['cart4']);

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pamper Pet </title>
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
               <img src="images/logo.png" alt="Image" class="js-logo-clone" height="70" width="100">
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children ">
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
                


                  <li class="active"><a href="../front/ajouterlivraison.php">livraison</a></li>
                  <li class="active"><a href="../front/evenment.php">EVENEMENT</a></li>
                  <li class="active"><a href="../front/promotion.php">PROMOTION</a></li>
                  <li class="active"><a href="../front/index.php">Article</a></li>
                  <li class="active"><a href="produit.php">Produit</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>

                </thead>
                <tbody>
                <?PHP

                $totalproduit1=0;$totalproduit2=0;$totalproduit3=0;$totalproduit4=0;
                if(isset($prod1))
                {
foreach($prod1 as $row){
	
	?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
                    </td>
                    <td><?PHP echo $row['product_price']; ?>DT</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                       <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
                        &minus;</a class="btn btn-outline-primary js-btn-minus">
                        </div>
                        <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty1']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                        <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
                        &plus;</a class="btn btn-outline-primary js-btn-plus">
                        </div>
                      </div>

                    </td>
                    <td><?PHP $total=$_SESSION['qty1']*$row['product_price'];$totalproduit1=+$total;
   echo $total; ?>DT</td>
   	<td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
	X</a class="btn btn-primary height-auto btn-sm"></td>
 
                  </tr>
                  <?PHP
}}
if(isset($prod2))
{
foreach($prod2 as $row){

?>
  <tr>
    <td class="product-thumbnail">
      <img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
    </td>
    <td class="product-name">
      <h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
    </td>
    <td><?PHP echo $row['product_price']; ?>DT</td>
    <td>
      <div class="input-group mb-3" style="max-width: 120px;">
        <div class="input-group-prepend">
       <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
        &minus;</a class="btn btn-outline-primary js-btn-minus">
        </div>
        <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty2']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <div class="input-group-append">
        <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
        &plus;</a class="btn btn-outline-primary js-btn-plus">
        </div>
      </div>

    </td>
    <td><?PHP $total=$_SESSION['qty2']*$row['product_price'];$totalproduit2=+$total;
echo $total; ?>DT</td>
<td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
X</a class="btn btn-primary height-auto btn-sm"></td>

  </tr>
  <?PHP
}}
if(isset($prod3))
{
foreach($prod3 as $row){

?>
  <tr>
    <td class="product-thumbnail">
      <img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
    </td>
    <td class="product-name">
      <h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
    </td>
    <td><?PHP echo $row['product_price']; ?>DT</td>
    <td>
      <div class="input-group mb-3" style="max-width: 120px;">
        <div class="input-group-prepend">
       <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
        &minus;</a class="btn btn-outline-primary js-btn-minus">
        </div>
        <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty3']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <div class="input-group-append">
        <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
        &plus;</a class="btn btn-outline-primary js-btn-plus">
        </div>
      </div>

    </td>
    <td><?PHP $total=$_SESSION['qty3']*$row['product_price'];$totalproduit3=+$total;
echo $total; ?>DT</td>
<td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
X</a class="btn btn-primary height-auto btn-sm"></td>

  </tr>
  <?PHP
}}
if(isset($prod4))
{
foreach($prod4 as $row){

?>
  <tr>
    <td class="product-thumbnail">
      <img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
    </td>
    <td class="product-name">
      <h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
    </td>
    <td><?PHP echo $row['product_price']; ?>DT</td>
    <td>
      <div class="input-group mb-3" style="max-width: 120px;">
        <div class="input-group-prepend">
       <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
        &minus;</a class="btn btn-outline-primary js-btn-minus">
        </div>
        <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty4']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <div class="input-group-append">
        <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
        &plus;</a class="btn btn-outline-primary js-btn-plus">
        </div>
      </div>

    </td>
    <td><?PHP $total=$_SESSION['qty4']*$row['product_price'];$totalproduit4=+$total;
echo $total; ?>DT</td>
<td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
X</a class="btn btn-primary height-auto btn-sm"></td>

  </tr>
  <?PHP
}}
$total=$totalproduit1+$totalproduit2+$totalproduit3+$totalproduit4;


?>






                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">

              <div class="col-md-6">
              <button class="btn btn-primary btn-lg btn-block" onclick="window.location='produit.php'">Continue shopping </button>

              </div>
            </div>

          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                  <strong class="text-black"><?PHP echo $total; ?>DT</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?PHP echo $total; ?>DT</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
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