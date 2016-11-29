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
   'ik@ortekstekstil.com' => 'Orteks Tekstil İK',
   'eren@ortekstekstil.com' => 'Eren KÜRKÇÜOĞLU'
);
foreach($recipients as $email => $name)
{
   $mail->AddCC($email, $name);
}
$mail->Subject  =  "İK Formu: ortekstekstil.com";
$mail->Body     =  


"Ad ve Soyad: " . $_POST["isim"] . "\r\n" .
"E-posta: " . $_POST["eposta"] . "\r\n" .
"Telefon: " . $_POST["telefon"] . "\r\n" .
"Adres: " . $_POST["adres"] . "\r\n" .
"Doğum Tarihi: " . $_POST["dogumTarihi"] . "\r\n" .
"Cinsiyet: " . $_POST["cinsiyet"] . "\r\n" .
"Askerlik Durumu: " . $_POST["askerlik"] . "\r\n" .
"Medeni Hal: " . $_POST["medeni"] . "\r\n" .
"En Son Bitirilen Okul: " . $_POST["okul"] . "\r\n" .
"İş Tecrübesi: " . $_POST["tecrube"] . "\r\n" .
"Referans: " . $_POST["referans"] . "\r\n" .
"Fotoğraf: " . "Ektedir." . "\r\n" 
;

// $sourcePath = $_FILES['fotograf']['tmp_name'];       // Storing source path of the file in a variable
// $targetPath = "upload/" . $_FILES['fotograf']['name']; // Target path where file is to be stored
// move_uploaded_file($sourcePath,$targetPath); 

move_uploaded_file($_FILES['fotograf']['tmp_name'], "/uploads/" . $_FILES['fotograf']['name']);
// $mail->AddAttachment(BASE_PATH .  "/uploads/" . $_FILES['fotograf']['name']);
$mail->AddAttachment($_FILES['fotograf']['tmp_name'],$_FILES['fotograf']['name']); 

if(!$mail->Send()) {

	echo $mail->ErrorInfo;
}
else{
	echo true;
}
?>
