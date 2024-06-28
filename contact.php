<?php
if(isset($_POST['submit'])){

    $to = "rcorentin@gmail.com"; // Your email address
    $from = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL); // Sanitize and validate sender's email address
    $first_name = htmlspecialchars($_POST['firstName']); // Sanitize user input
    $last_name = htmlspecialchars($_POST['lastName']); // Sanitize user input
    $phone = htmlspecialchars($_POST['phone']); // Sanitize user input
    $message_text = htmlspecialchars($_POST['message']); // Sanitize user input

    if($from && $first_name && $last_name && $phone && $message_text) {
        $subject = "Email envoyé depuis le portfolio";
        $message = "Prénom: " . $first_name . "\n" .
                   "Nom: " . $last_name . "\n" .
                   "Numéro de téléphone: " . $phone . "\n\n" .
                   "Message:\n" . $message_text;

        $headers = "From:" . $from;

        if(mail($to, $subject, $message, $headers)) {
            echo "Mail envoyé, merci " . $first_name;
        } else {
            echo "Erreur lors de l'envoi du mail.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
?>
