<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'core/CmdC.php';
include 'entities/cmd.php';
include "core/ProduitCore.php";
include 'barcode128.php';

$core=new ProduitCore();
$CmdC=new CmdC();
$listecmd=$CmdC->recherchecmd($_POST['id_commande']);



		$id_commande = $_POST['id_commande'];
		$nomcomplet = $_POST['first_name'].' '.$_POST['last_name'];
		$adresse = $_POST['address1'];
		$tel = $_POST['mobile'];
		$prix = $_POST['total'];

	

   
    ?>  
    <html>
<head>
<style>
p.inline {display: inline-block;
    margin-left: auto;
    margin-right: auto;
    width: 8em;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%" >
		<?php

echo "<img src='images/logo.png' style='width: 130px; text-align: center'>";
echo  " &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;";

            echo "<p class='inline' ><span ><b></b></span>".bar128(stripcslashes($_POST['id_commande']))."<span ><b></b><span></p>";
            echo  " &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;";

      ?>
  <div class="box js-box" style="border:1px solid #000">


<!-- END NAVBAR-->
<div class="site-wrap js-site-wrap">

    <div class="center">
        <div class="container">
            <div class="row">
                <div class="listing listing--properties-list" style="width: 100%">

                    <div class="listing__main">
                        <div class="form-property">

                            <table style="width: 100%">
                                <tbody><tr>
                                    <td style="width: 20%"></td>
                                    <td style="width: 60%;text-align: center"><table style="width: 100%;margin-top: 20px;margin-bottom: 40px;">
                                            <tbody><tr>
                                                <td style="width: 10%"></td>
                                                <td style="font-size: 17px; padding: 5px;text-align: left;">

                                                    <div><b> </b></div>
                                                    <div><b>Nom commercial: </b> <?PHP echo  "Pamper Pet"; ?></div>
                                                    <div><b>ADRESSE:</b> <?PHP echo "Tunis"; ?> </div>
                                                    <div><b>TELEPHONE:</b> <?PHP echo "222222222"; ?></div>

                                                </td>
                                                <td style="width: 20%"></td>
                                            </tr>
                                        </tbody></table></td>
                                </tr>
                            </tbody></table>
                            <table style="width: 100%">
                                <tbody><tr>
                                    <td style="width: 20%;"></td>
                                    <td style="width: 60%"><div style="text-align: center;font-size: 26px;border: 1px solid #000;padding-left: 0px;margin-left: 0px;font-weight: bold;margin-top: 30px;margin-bottom: 30px;">BON DE COMMANDE <?PHP echo $_POST['id_commande'] ?> </div></td>
                                    <td style="width: 20%;text-align: center"></td>
                                </tr>
                            </tbody></table>
                        

                            <table border="1" style="width: 100%;margin-top: 20px;margin-bottom: 40px;font-size: 15px;">
                            <tbody><tr>
                            <th style="width: 10%; text-align: center">ID</th>

                                                <th style="width: 60%; text-align: center">Produit</th>
                                                <th style="width: 10%;text-align: center">Quantité</th>
                                                <th style="width: 15%; text-align: center">Montant Total </th>
                                            </tr>
                                          <?php
                                          $total=0;  foreach($listecmd as $row){
    $prod=$core->rechercheProduit($row['id_produit']);
    foreach($prod as $prodd){
	?>
	<tr>
		

    <td style="padding: 10px"><?PHP echo $prodd['product_id'];; ?>
    <td style="padding: 10px"><?PHP echo $prodd['product_title'];; ?>

                                       <br><br>
                                    </td>
                                    <td style="padding: 10px; text-align: center"><?PHP echo $row['qty']; ?>
                                       <br><br></td>
                                     <br></td>
                                    <td style="padding: 10px; text-align: center"><?PHP echo  $prixht=($prodd['product_price']*$row['qty']);$total=+$prixht; ?> 
                                        <br><br></td>
	</tr>
	<?PHP
}}
?>    <tr>
                                
                                </tr>
                            </tbody></table>

                            <div style="text-align: right">
                                <table style="width: 100%">
  
                                        </td>
                                        <td style="border: 1px solid #000; text-align: left; width: 40%">
                                            <div></div>  
                                        </td>
                                    </tr>
                                </tbody></table>

                            </div>


                        </div>


                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END CENTER SECTION-->
<!-- BEGIN AFTER CENTER SECTION-->
<!-- END AFTER CENTER SECTION-->
<!-- BEGIN PARTNERS-->


</div>



</body></html>