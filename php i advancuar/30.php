<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Adresa e marrësit
$to = "marrësi@example.com";
// Subjekti i email-it
$subject = "Mesazh nga faqja juaj";
// Mesazhi
$message = "Përshëndetje,\n\nKy është një mesazh i dërguar nga PHP.\n\nJu faleminderit!";

// Header-at (p.sh. dërguesi)
$headers = "From: derguesi@example.com". "\r\n".
           "Reply-To: derguesi@example.com". "\r\n".
           "X-Mailer: PHP/". phpversion();

// Funksioni për dërgimin e email-it
if (mail($to, $subject, $message, $headers)) {
    echo "Email-i u dërgua me sukses!";
} else {
    echo "Dështoi dërgimi i email-it.";
}
?>
</body>
</html>
