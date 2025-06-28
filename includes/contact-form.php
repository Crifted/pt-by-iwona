<?php
// Formulier data ophalen en opschonen
$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = strip_tags(trim($_POST["phone"] ?? ''));
$subject = strip_tags(trim($_POST["subject"]));
$message = strip_tags(trim($_POST["message"]));

// Fouten controleren
$errors = [];
if (empty($name)) $errors[] = "Naam is verplicht";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "E-mailadres is ongeldig";
if (empty($subject)) $errors[] = "Interesse is verplicht";
if (empty($message)) $errors[] = "Bericht is verplicht";

// Als er geen fouten zijn, mail versturen
if (empty($errors)) {
    // E-mail ontvanger
    $recipient = "yvonnekjagi@hotmail.com";
    
    // E-mail onderwerp
    $email_subject = "Nieuw bericht van KOZA Fit website: $subject";
    
    // E-mail inhoud
    $email_content = "Naam: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Telefoon: " . ($phone ? $phone : "Niet opgegeven") . "\n";
    $email_content .= "Interesse: $subject\n\n";
    $email_content .= "Bericht:\n$message\n";
    
    // E-mail headers
    $headers = "From: $name <$email>";
    
    // E-mail versturen
    if (mail($recipient, $email_subject, $email_content, $headers)) {
        // Succes, redirect met success status
        header("Location: index.php?status=success#contact");
        exit;
    } else {
        // Fout bij verzenden
        $errors[] = "Er ging iets mis bij het verzenden. Probeer het later opnieuw.";
    }
}

// Als er fouten zijn, redirect met error status
if (!empty($errors)) {
    $error_message = implode(", ", $errors);
    header("Location: index.php?status=error&errors=" . urlencode($error_message) . "#contact");
    exit;
}
?>