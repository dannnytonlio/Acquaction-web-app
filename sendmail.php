<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require '../vendor/autoload.php';
 
$conn = mysqli_connect("localhost", "S4691028", "dannyjoel98","S4691028");

$result = mysqli_query($conn, "SELECT * FROM users");

while ($row = mysqli_fetch_object($result))
{   
    $mail = new PHPMailer(true);
 
    try {
        $mail->SMTPDebug = 0; // abilita output dettagliato
        $mail->isSMTP();    //mposta il mailer per usare SMTP
        $mail->Host       = 'smtp.gmail.com'; //specifica il main e backup dei server SMTP
        $mail->SMTPAuth   = true; // autorizza l'autentificazione SMTP
        $mail->Username   = 'noreplyacquaction@gmail.com'; //SMTP username
        $mail->Password   = 'xxxxxxxxxx0123456789'; //SMTP passsword
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // per la sicurezza dell'informazione trasmessa
        $mail->Port       = 587;
 
        $mail->setFrom('noreplyacquaction@gmail.com', 'Acquaction');
        $mail->addAddress($row->email);     // seleziona tutti gli utenti
     
 
        // Contenuto
        $mail->isHTML(true);
        $mail->Subject = 'oggetto della mail qua';
        $mail->Body    = 'Buongiorno da parte di <b>Aquaction</b>!<br><br><br>Cordialmente';
        $mail->AltBody = 'Questo è il corpo del messaggio per non-HTML mail';
 
        $mail->send(); //mail vengono mandate
        echo '<p>Messaggio mandato a ' . $row->email . '</p>';  //stampa messaggio di successo
    } catch (Exception $e) {
        echo "<p>Messaggio non può essere mandato a. Mailer Error: {$mail->ErrorInfo}</p>";  //stampa messaggio di errore
    }
}  
     //myaccount.google.com/u/1/lesssecureapps?pli=1&rapt=AEjHL4MyUCkEoR5xgGst2atWKnGIqKKS_2csmBj981NaZQ_pk16ao51T23uUkBOHgQTzGRjY5U7dtEBE00cfaDN3SLmvEBPCig autorizzare applicazioni meno sicuri(google)