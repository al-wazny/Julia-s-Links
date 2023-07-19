<?php
$name = $_POST['pronouns'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
$tel = $_POST['phoneNumber'];
$email = $_POST['email'];
$city = $_POST['city'];
$description = $_POST['tattoo-description'];
$size = $_POST['tattoo-size'];
$bodyPart = $_POST['body-part'];
$freeTime = $_POST['free-time'];
$questions = $_POST['questions'];

$message = "
Kontaktinformationen: 
name: $name
telefon Nummer: $tel
email: $email
Stadt: $city

Tattoo informationen:
Beschreibung: $description
Groesse: $size cm
Stelle: $bodyPart

Zusaetzliche Informationen:
Freie zeit: $freeTime
Fragen: $questions
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
$headers .= "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

mail('requests@juliaizabellatattoos.art', 'Terminanfrage', $message, $headers);
header('location: /')
?>
