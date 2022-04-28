<?php //fjerner denne etterpå fordi homepage ikke trenger login men alt annet som profil og download trenger
include("function.php");
$user_data = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<a href="profile.php"> profilen din </a>

</body>
</html>