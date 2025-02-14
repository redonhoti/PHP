<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8">
    <title>Formulari i kontaktit</title>
</head>
<body>
    <h2>Na kontaktoni</h2>
    <p>Ju lutemi plotësoni këtë formular dhe na e dërgoni.</p>
    <form action="formulari.php" method="post">
        <p>
            Emri:
            <input type ="text" name= "name">
        </p>
        <p>
            Email:
            <input type ="text" name="email">
        </p>
        <p>
             Subjekti: 
            <input type ="text" name= "subject">
        </p>
        <p>
            Mesazh:
            <textarea name="message" rows="5" cols="30"></textarea> 
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
