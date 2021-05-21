<?PHP
include "../Model/evenment.php";
include "../Controller/evenmentC.php";
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';



$datedebut=$_POST['date_evn'];

$today = date("Y-m-d ");
if ($datedebut<$today){
    echo "<h4> date evenement doit etre supérieur à date d'aujourd'hui ($today) <br> <a href='ajouterEvenment1.html'>ressayer encore  </a> </h4>";

}else {


    if (isset($_POST['nbr_invt']) and isset($_POST['nom_evn']) and isset($_POST['image']) and isset($_POST['date_evn']) and isset($_POST['type_evn'])) {
        $evenment1 = new evenment($_POST['nbr_invt'], $_POST['nom_evn'], $_POST['date_evn'], $_POST['image'], $_POST['type_evn']);
//Partie2
        /*
        var_dump($evenment1);
        }
        */
//Partie3
        $evenment1C = new EvenmentC();
        $evenment1C->ajouterEvenment($evenment1);
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
            $mail->setFrom('oo3011521@gmail.com','admin Planete tours');
            $mail->addAddress('mortadha.bouzgarrou@esprit.tn');     // Add a recipient





            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Ajout evenment';
            $mail->Body = 'Un ajout devenment a ete affecte.  <br> MERCI  . ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            header('Location: ../index.php');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        header('Location: afficherEvenment1.php');

    } else {
        echo "vérifier les champs";
    }
}

?>