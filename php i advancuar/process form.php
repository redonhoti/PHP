<!DOCTYPE html> 
<html lang="sq">
 <head> 
<meta charset="UTF-8"> 
<title>Formulari i Regjistrimit</title>
 </head>
 <body> 
<h2>Formulari i Regjistrimit</h2>
 <form action="process_form.php" method="POST">
 <label for="name">Emri:</label> 
<input type="text" id="name" name="name" required><br><br> 
<label for="email">Email-i:</label> 
<input type="email" id="email" name="email" required><br><br> 
<label for="password">Fjalëkalimi:</label>
 <input type="password" id="password" name="password" required><br><br> 
<input type="submit" value="Regjistrohu">
 </form> 
</body>
 </html>
