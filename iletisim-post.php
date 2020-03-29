<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$tmail = $_POST["tmail"];
$tad = $_POST["tad"];
$tadsoy = $_POST["tadsoy"];
$tmesax = $_POST["tmesax"];
?>
<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->SMTPDebug = 1;
$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //ssl & tls

$mail->Port = 587; //25 , 465 , 587
$mail->Host = "smtp.yandex.com";

$mail->Username = "YANDEX MAIL AL ONU YAZ";
$mail->Password = "YANDEX MAIL SIFEN";


$mail->setFrom("YANDEX MAIL AL ONU YAZ");
$mail->addAddress("GONDERILCEK MAIL YAZDIRIRSIN");


$mail->isHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Subject = "GIDEN MAIL BASLIGI";
$mail->Body = "MAIL ICERIGI";


if ($mail->send())
    echo "Mail gonderimi basarili.";
else
    echo "Malesef olmadi.";


?>
