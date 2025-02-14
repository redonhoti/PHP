<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merr të dhënat nga formulari
    $emri = htmlspecialchars($_POST['emri']);
    $email = htmlspecialchars($_POST['email']);
    $mesazhi = htmlspecialchars($_POST['mesazhi']);
    // Adresa e email-it ku do dërgohet mesazhi
    $to = "ardiantahiri0503@gmail.com";
    $subject = "Mesazh Kontakti nga $emri";
    // Përmbajtja e email-it
    $content = "Emri: $emri\n";
    $content .= "Email: $email\n\n";
    $content .= "Mesazhi:\n$mesazhi\n";
    // Header për të specifikuar dërguesin
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    // Kontrolli nëse mesazhi është dërguar
    if (mail($to, $subject, $content, $headers)) {
        $response = "Mesazhi juaj u dërgua me sukses!";
    } else {
        $response = "Ndodhi një problem gjatë dërgimit. Ju lutemi provoni përsëri.";
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular Kontakti</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        input, textarea, button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
  .response { text-align: center; margin: 20px 0; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Formular Kontakti</h2>
    <?php if (!empty($response)): ?>
        <div class="response"><?php echo $response; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="emri">Emri:</label>
        <input type="text" id="emri" name="emri" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="mesazhi">Mesazhi:</label>
        <textarea id="mesazhi" name="mesazhi" rows="5" required></textarea>
        <button type="submit">Dërgo</button>
    </form>
</body>
</html>
