<?
require("class.phpmailer.php");

$mail = new PHPMailer();

// if ( empty($_POST["isim"]) || empty($_POST["eposta"]) ||  empty($_POST["mesaj"]) ) {
// 	echo "Hata";
// 	header("Refresh: 3; url=../index.html"); 
// 	exit;
// }



$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.ortekstekstil.com"; // SMTP servers
$mail->Port = 587;     // SMTP Port
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@ortekstekstil.com";  // SMTP username
$mail->Password = "Kaan5151"; // SMTP password

$mail->From     = "info@ortekstekstil.com";
$mail->Fromname = $_POST["isim"];
$mail->AddAddress("info@ortekstekstil.com");
$recipients = array(
   'eren@ortekstekstil.com' => 'Eren Kürkçüoğlu',
   'ozlem@ortekstekstil.com' => 'Özlem Akdoğan',
   'ik@ortekstekstil.com' => 'Orteks Tekstil İK',
   'merve@ortekstekstil.com' => 'Merve Yıldız'
);
foreach($recipients as $email => $name)
{
   $mail->AddCC($email, $name);
}
$mail->Subject  =  "İletişim Formu: ortekstekstil.com";
$mail->Body     =  


"Adı Soyadı: " . $_POST["isim"] . "\r\n" .
"E-posta: " . $_POST["eposta"] . "\r\n" .
"Telefon: " . $_POST["telefon"] . "\r\n" .
"Mesaj: " . $_POST["mesaj"]
;


if(!$mail->Send()) {

	echo $mail->ErrorInfo;
}
else{
	echo true;
}
?>
