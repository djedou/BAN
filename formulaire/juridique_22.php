<?php
//includes required phpmailer files
require '../../phpmailer/includes/PHPMailer.php';
require '../../phpmailer/includes/SMTP.php';
require '../../phpmailer/includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Messages
$titre=$_POST['titre'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$portable=$_POST['portable'];
$fixe=$_POST['fixe'];
$email=$_POST['email'];
$frequente=$_POST['frequente'];
$iccdepuis=$_POST['iccdepuis'];
$motif=$_POST['motif'];

$message= $titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom))."\n";
$message=$message."\n";
$message=$message."      Téléphone portable :  ".$portable ."\n";
$message=$message."      Téléphone fixe :  ".$fixe ."\n";
$message=$message."      Adresse e-mail :  ".$email."\n";
$message=$message."\n";
if ($frequente!=""){
  $message=$message."Je fréquente ".$frequente."\n";
  }
else { 
  $message=$message."Je fréquente ".$iccdepuis."\n";
  }
$message=$message."\n";
$message=$message."Motif du rendez-vous :  ".$motif;


$adresseExp = $_POST['email'];//expeditaire
//$adresseDest = "juridique@impactcentrechretien.be";//"dieumerci.kanongo@impactcentrechretien.be";//destinataire
$objet = "Nouvelle demande de RDV : ".$titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom));
$titre= $titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom))."\n";
$message = $message.'';

$message2 = "Nous accusons réception de votre inscription à la permanence d’Impact Juridique.\n";
$message2 = $message2. "\n";
$message2 = $message2. "Nos Consultant(e)s mettent toutes leurs compétences à votre service pour vous accompagner dans vos démarches administratives.\n";
$message2 = $message2. "\n";
$message2 = $message2. "Notre équipe reprendra contact avec vous dans les meilleurs délais afin de vous communiquer nos prochaines dates de permanences.\n";

$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Commentaire du serveur
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'josephzabia@yahoo.fr';                     //SMTP username
    $mail->Password   = 'ykvqfyjwjyunhkhd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //tls          //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('josephzabia@yahoo.fr', 'Mailer');
    $mail->addAddress($adresseExp, $titre);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('josephzabia@yahoo.fr');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $objet;
    $mail->Body    = $message2;
    $mail->AltBody = $message2;

    $mail->send();
    $mail->SmtpClose();//on reset le mail
    unset($mail);

    //Enoie mail au ministère

    $mail = new PHPMailer(true);                    //Commentaire du serveur
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'josephzabia@yahoo.fr';                     //SMTP username
    $mail->Password   = 'ykvqfyjwjyunhkhd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //tls          //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('josephzabia@yahoo.fr', 'Mailer');
    $mail->addAddress('josephzabia@yahoo.fr', 'Mailer');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('josephzabia@yahoo.fr');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $objet;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        //window.location.replace("../");
        window.parent.location.href = "../";
        alert("Demande envoyé");
        //parent.closeIFrame();
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <style type="text/css">
    </style>

</body>
</html>