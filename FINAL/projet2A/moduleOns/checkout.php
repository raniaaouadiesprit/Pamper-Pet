<?PHP
session_start(); 
$_SESSION['id']=1;

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
    <title>Pamper Pet &mdash; shop online </title>
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
    <script type="text/javascript">
 
</script>
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
                  <li class="active"><a href="../front/ajouterlivraison.php">livraison</a></li>
                  <li class="active"><a href="../front/evenment.php">EVENEMENT</a></li>
                  <li class="active"><a href="../front/promotion.php">PROMOTION</a></li>
                  <li class="active"><a href="../front/index.php">Article</a></li>
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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="#">Click here</a> to login
            </div>
          </div>
        </div>
        <form name="form1" method="POST" onSubmit="verif_formulaire() "action="core/ajoutcmd.php" >
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
        

            </div>
          </div>
          <div class="col-md-6">


            <div class="row mb-5">
              <div class="col-md-12">
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    <?PHP
                $totalproduit1=0;$totalproduit2=0;$totalproduit3=0;$totalproduit4=0;
                if(isset($prod1))
                {
foreach($prod1 as $row){
	
	?>
	
                      <tr>
                        <td><?PHP echo $row['product_title']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty1']?></td>
                        <td><?PHP $totalproduit1=$_SESSION['qty1']*$row['product_price'];$totalpanier=+$totalproduit1;
   echo $totalproduit1; ?>DT</td>
                      </tr>
                      <?PHP
}}
if(isset($prod2))
{
foreach($prod2 as $row){

?>

      <tr>
        <td><?PHP echo $row['product_title']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty2']?></td>
        <td><?PHP $totalproduit2=$_SESSION['qty2']*$row['product_price'];$totalpanier=+$totalproduit2;
echo $totalproduit2; ?>DT</td>
      </tr>
      <?PHP
}}
if(isset($prod3))
{
foreach($prod3 as $row){

?>

      <tr>
        <td><?PHP echo $row['product_title']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty3']?></td>
        <td><?PHP $totalproduit3=$_SESSION['qty3']*$row['product_price'];$totalpanier=+$totalproduit3;
echo $totalproduit3; ?>DT</td>
      </tr>
      <?PHP
}}
if(isset($prod4))
{
foreach($prod4 as $row){

?>

      <tr>
        <td><?PHP echo $row['product_title']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty4']?></td>
        <td><?PHP $totalproduit4=$_SESSION['qty4']*$row['product_price'];$totalpanier=+$totalproduit4;
echo $totalproduit4; ?>DT</td>
      </tr>
      <?PHP
}}
$total=$totalproduit1+$totalproduit2+$totalproduit3+$totalproduit4;

?>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong> <?php  echo $total ?>DT</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Visa</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <a href="https://www.Visa.com" button style="font-size:24px">Visa <i class="fa fa-paypal"></i></a>

                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>


                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                    <a href="https://www.paypal.com/us/home" button style="font-size:24px">Paypal <i class="fa fa-paypal"></i></a>

                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                      
                    </div>
                  </div>
                  
                 
                  
                  <div class="form-group">
                  <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" name="coupon" id="coupon" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  </div>

                </div>
              </div>
            </div>
                  <?php
                  if(isset($_SESSION['cart1']))
    { ?>
                      <input type="hidden" name="prod1" value=" <?php echo $_SESSION['cart1']; ?>">
                      <input type="hidden" name="qty1" value=" <?php echo $_SESSION['qty1']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart2']))
    { ?>
                      <input type="hidden" name="prod2" value=" <?php echo $_SESSION['cart2']; ?>">
                      <input type="hidden" name="qty2" value=" <?php echo $_SESSION['qty2']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart3']))
    { ?>
                      <input type="hidden" name="prod3" value=" <?php echo $_SESSION['cart3']; ?>">
                      <input type="hidden" name="qty3" value=" <?php echo $_SESSION['qty3']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart4']))
    { ?>
                      <input type="hidden" name="prod4" value=" <?php echo $_SESSION['cart4']; ?>">
                      <input type="hidden" name="qty4" value=" <?php echo $_SESSION['qty4']; ?>">

                      <?php } ?>
              
                  <input type="hidden" name="total" value=" <?php echo $total; ?>">
                  <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" />
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        </form>



        <!-- </form> -->
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