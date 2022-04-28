<?php
session_start();
include("connection.php");
?>

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
    <title>Signup</title>
</head>
<body>
    <!-- registrering skjema -->
    <form action="registration.php" method="post"> <!-- method post fordi inputene skal bli postet i databasen -->
        <h1> Registrering</h1>

        <label for=""> Brukernavn:</label><br>
        <input type="text" min="3" name="username" id="username"><br> <!-- name linker til hvilke columns i db inputen kal bli postet til -->
        <label for=""> Email:</label><br>
        <input type="text" min="3" name="email" id="email"><br>
        <label for=""> Passord:</label><br>
        <input type="password" min="6" name="password" id="password"><br>

        <input type="submit" class="form_btn" value="Sign up">
        <a href="login.php"> click to login</a>
    </form>
</body>
</html>