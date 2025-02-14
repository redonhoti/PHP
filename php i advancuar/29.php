<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Përcakto adresën e marrësit të emailit
$to = "marrësi@example.com";

// Subjekti i emailit
$subject = "Email Test nga PHP";

// Përmbajtja e emailit
$message = "Përshëndetje,\nKy është një email test dërguar me PHP.";

// Headers (opsional, mund të përdoren për informacione shtesë)
$headers = "From: derguesi@example.com". "\r\n".
           "Reply-To: derguesi@example.com". "\r\n".
           "X-Mailer: PHP/". phpversion();

// Dërgo emailin
if (mail($to, $subject, $message, $headers)) {
    echo "Email u dërgua me sukses!";
} else {
    echo "Dështoi dërgimi i emailit.";
}
?>
</body>
</html>
