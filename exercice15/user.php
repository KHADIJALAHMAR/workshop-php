<?php 
session_start();
$fname = $_SESSION["prenom"];
$lname = $_SESSION["nom"];
$civ = $_SESSION["civ"];

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
    <h1><?php echo "Bienvenue $civ. $fname $lname" ?></h1>
</body>
</html>