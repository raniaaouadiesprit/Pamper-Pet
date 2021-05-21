<?PHP



include "../Model/livreur.php";
include "../Controller/livreurC.php";

// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

if ( isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['prenom']) and isset($_POST['numero']) and isset($_POST['image'])){

$livreur1=new livreur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['image']);

//Partie2
/*
 *
var_dump($livraison1);
}
*/
//Partie3

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth = 1;                                   // Enable SMTP authentication
        $mail->Username = 'oo3011521@gmail.com';                     // SMTP username
        $mail->Password = 'oo123456789';                               // SMTP password
        $mail->SMTPSecure="ssl";
        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('oo3011521@gmail.com','admin projet web');
        $mail->addAddress($_POST['email']);     // Add a recipient





        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Vous avez affectee comme livreur dans notre site'; 
        $mail->Body = 'bienvenue a PamperPet   <br> Merci pour votre confiance. ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        header('Location: ../index.php');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);



header('Location: ajouterLivreur.html');
	
}else{
          
	echo "vérifier les champs";
}
//*/

?>