<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $number = htmlspecialchars($_POST['number']);


    $to = "destinataire@example.com";
    $subject = "Message de contact : ".$name;
    $headers = "From: " . $email . "numero : ".$number;

    mail($to, $subject, $message, $headers);

    echo "Message envoyé avec succès.";
}
?>
