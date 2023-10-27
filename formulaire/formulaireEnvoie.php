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
$portable=$_POST['portable'];
//$fixe=$_POST['fixe'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$codepostal=$_POST['codepostal'];
$pays=$_POST['pays'];
   if($_POST['civlite']=="couple")
   {
$nomM=$_POST['nomM'];
$prenomM=$_POST['prenomM'];
$nomF=$_POST['nomF'];
$prenomF=$_POST['prenomF'];   
   }  
   else 
   {
$titre=$_POST['titre'];
        if ($titre=='Mr'){
             $titreS='cher';}
        else
             {$titreS='chère';}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];  
   }

if($_POST['civlite']=='couple'){
$message = "Mr ".strtoupper($nomM)." ".ucfirst(strtolower($prenomM))."\n";
$message = $message. "Mme ".strtoupper($nomF)." ".ucfirst(strtolower($prenomF))."\n";
}
else{
$message= $titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom))."\n";
}
$message=$message."\n";
$message=$message."Téléphone portable :  ".$portable ."\n";
//$message=$message."Téléphone fixe :  ".$fixe ."\n";
$message=$message."Adresse e-mail :  ".$email."\n";
$message=$message."\n";
$message=$message."Adresse : ".$adresse."\n";
$message=$message."Ville :  ".ucfirst(strtolower($ville)) ."\n";
$message=$message."Code Postal :  ".$codepostal ."\n";
$message=$message."Pays :  ".ucfirst(strtolower($pays))."\n";
$message=$message."\n";
$message=utf8_encode($message);



$adresseExp= $_POST['email'];
$adresseDest= "finances@impactcentrechretien.be";//"dieumerci.kanongo@impactcentrechretien.be";//
if($_POST['civlite']=='couple'){
$objet= "Nouvelle demande de numéro de donateur: Mr ".strtoupper($nomM)." ".ucfirst(strtolower($prenomM))." et Mme ".strtoupper($nomF)." ".ucfirst(strtolower($prenomF));
}
else{
$objet= "Nouvelle demande numéro de Donateur:  ".$titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom)); 
}
$message= $message;

$message2="Votre demande de numéro de donateur a bien été prise en compte. \n";
$message2=$message2. "Elle est en cours de traitement, et vous recevrez très bientôt le numéro unique de donateur que vous pourrez mentionner lors de vos futures dîmes et offrandes. \n";
$message2=$message2. "\n";
$message2=$message2. "Que Dieu vous bénisse abondamment pour vos contributions. \n";
$message2=$message2. "Elles représentent une véritable marque de fidélité aux principes bibliques et une preuve tangible d’obéissance à Dieu. \n";
$message2=utf8_encode($message2);


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

    //Envoie mail au fidel
    $mail->setFrom('josephzabia@yahoo.fr', 'Impact Centre Chrétien');
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

    $mail = new PHPMailer(true);
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Commentaire du serveur
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'josephzabia@yahoo.fr';                     //SMTP username
    $mail->Password   = 'ykvqfyjwjyunhkhd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //tls          //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

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
        alert("Demande envoyée");
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