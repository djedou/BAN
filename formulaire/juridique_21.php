<?php
$smtpServer="smtp.telenet.be";
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
$message=$message."      T�l�phone portable :  ".$portable ."\n";
$message=$message."      T�l�phone fixe :  ".$fixe ."\n";
$message=$message."      Adresse e-mail :  ".$email."\n";
$message=$message."\n";
if ($frequente!=""){
  $message=$message."Je fr�quente ".$frequente."\n";
  }
else { 
  $message=$message."Je fr�quente ".$iccdepuis."\n";
  }
$message=$message."\n";
$message=$message."Motif du rendez-vous :  ".$motif;


$adresseExp = $_POST['email'];//expeditaire
$adresseDest = "juridique@impactcentrechretien.be";//"dieumerci.kanongo@impactcentrechretien.be";//destinataire
$objet = "Nouvelle demande de RDV : ".$titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom));
$message = $message;

$message2 = "Nous accusons r�ception de votre inscription � la permanence d�Impact Juridique.\n";
$message2 = $message2. "\n";
$message2 = $message2. "Nos Consultant(e)s mettent toutes leurs comp�tences � votre service pour vous accompagner dans vos d�marches administratives.\n";
$message2 = $message2. "\n";
$message2 = $message2. "Notre �quipe reprendra contact avec vous dans les meilleurs d�lais afin de vous communiquer nos prochaines dates de permanences.\n";
?>

<?php /* $smtpServer='smtp.telenet.be';*/
/* Pour num�ricable: smtp.numericable.be
   Pour t�l�net: smtp.telenet.be
   Pour belgacom: relay.skynet.be
*/
?>
<html>
   <head>
   </head>
<body>
<?php

	require_once "../../phpmailer/class.phpmailer.php";
	$mail = new PHPmailer();
	$mail->IsSMTP();
	$mail->Host=$smtpServer;//voir index.php et index_0.php
	$mail->From="noreply@impactcentrechretien.be";//'expeditaire@yahoo.fr';
	$mail->AddAddress($adresseDest);//('destinataire@yahoo.fr');//adresse destinataire 
	$mail->AddReplyTo('noreply@impactcentrechretien.be');//('expeditaire@yahoo.fr');//	
	$mail->Subject=$objet;//'Exemple trouv� sur DVP';// Objet  
	$mail->Body=$message;//'Voici un exemple d\'e-mail au format Texte'; //
	if(!$mail->Send()){ //Teste le return code de la fonction
	  echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
	}
	else{
      //echo "<br/><br/><br/><br/><br/><br/><br/>";	
	  //echo "<center><h1>Nous avons r��u votre message. <br/>Pr�sentez-vous � la date qui sera communiqu�e prochainement � l'�glise.</h1></center>";
	}
	$mail->SmtpClose();
	unset($mail);
	

	// Dominique M en copie	
	$mail = new PHPmailer();
	$mail->IsSMTP();
	$mail->Host=$smtpServer;//voir index.php et index_0.php
	$mail->From="noreply@impactcentrechretien.be";//'expeditaire@yahoo.fr';
	$mail->AddAddress('dominique.mbog@gmail.com');//('destinataire@yahoo.fr');//adresse destinataire 
	$mail->AddReplyTo('noreply@impactcentrechretien.be');//('expeditaire@yahoo.fr');//	
	$mail->Subject=$objet;//'Exemple trouv� sur DVP';// Objet  
	$mail->Body=$message;//'Voici un exemple d\'e-mail au format Texte'; //
	if(!$mail->Send()){ //Teste le return code de la fonction
	  echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
	}
	else{	  
	  //echo "<br/><br/><br/><br/><br/><br/><br/>";	
	  //echo "<center><h1>$message1</h1></center>";
	}
	$mail->SmtpClose();
	unset($mail);	
// fin	  
	// Pasteur en copie	
	$mail = new PHPmailer();
	$mail->IsSMTP();
	$mail->Host=$smtpServer;//voir index.php et index_0.php
	$mail->From="noreply@impactcentrechretien.be";//'expeditaire@yahoo.fr';
	$mail->AddAddress('chris.sabou@gmail.com');//('destinataire@yahoo.fr');//adresse destinataire 
	$mail->AddReplyTo('noreply@impactcentrechretien.be');//('expeditaire@yahoo.fr');//	
	$mail->Subject=$objet;//'Exemple trouv� sur DVP';// Objet  
	$mail->Body=$message;//'Voici un exemple d\'e-mail au format Texte'; //
	if(!$mail->Send()){ //Teste le return code de la fonction
	  echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
	}
	else{	  
	  //echo "<br/><br/><br/><br/><br/><br/><br/>";	
	  //echo "<center><h1>$message1</h1></center>";
	}
	$mail->SmtpClose();
	unset($mail);	
    // fin		

	$message1 = "Bonjour " .$titre." ".strtoupper($nom)." ".ucfirst(strtolower($prenom)).", \n";
	$message1 = $message1."\n";
	$message1 = $message1. $message2."\n";
	$message1 = $message1. "\n";
	$message1 = $message1. "On est ensemble !\n";
	$message1 = $message1. "\n";
	$message1 = $message1. "\n";
	$message1 = $message1. "Impact Juridique\n";
	$message1 = $message1. "Impact Centre Chr�tien\n";
	$message1 = $message1. "Campus de Bruxelles\n";
	$message1 = $message1. "Rue Waelhem 68\n";
	$message1 = $message1. "1030 Bruxelles\n";
	//$message1 = $message1. " juridique@impactcentrechretien.be\n";
	//$message1 = $message1. "  www.impactcentrechretien.com";
	require_once "../../phpmailer/class.phpmailer2.php";
	$mail = new PHPmailers();
	$mail->IsSMTP();
	$mail->Host=$smtpServer;//voir index.php et index_0.php
	$mail->From="noreply@impactcentrechretien.be";//'expeditaire@yahoo.fr';
	$mail->AddAddress($adresseExp);//('destinataire@yahoo.fr');//adresse destinataire 
	$mail->AddReplyTo('noreply@impactcentrechretien.be');//('expeditaire@yahoo.fr');//	
	$mail->Subject="Votre demande a �t� prise en compte";//'Exemple trouv� sur DVP';// Objet  
	$mail->Body=$message1;//'Voici un exemple d\'e-mail au format Texte'; //
	if(!$mail->Send()){ //Teste le return code de la fonction
	  echo "<br/><br/><br/><br/><br/><br/><br/>";
	  echo "<center><h1>Votre adresse e-mail n'est pas correcte.</h1></center>";//$mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
	}
	else{
      echo "<br/><br/><br/><br/><br/><br/><br/>";	
	  echo "<center><h1>Demande envoy&eacute;e !</h1></center>";
	}
	$mail->SmtpClose();
	unset($mail);		  


	  
	  
	  header("Refresh: 2;URL=../../formulaire/formJuridique.php");
	  /*exit();	*/	
?>
</body>
</html>