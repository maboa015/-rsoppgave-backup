<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <!-- login skjema -->
    <form action="access.php" method="post">
        <h1> Logg inn</h1>
        <label for=""> Brukernavn:</label><br>
        <input type="text" name="username" required><br>
        <label for=""> Passord:</label><br>
        <input type="password" name="password" required><br>
        <p><input type="submit" class="form_btn" value="Logg inn"></p>
        
        <a href="register.php">Registrer deg</a><br>
        <br>
        <a href="#"> Glemt passord?</a>
    </form>
</body>
</html>