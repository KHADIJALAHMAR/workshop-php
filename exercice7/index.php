<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablaux</title>
</head>
<body>
<?php

    $technologies= ["HTML", "CSS","PHP"];
    echo"<ul>";
    foreach ($technologies as $technologie) {
        echo "<li>" . $technologie ."</li>";
    }
    echo "</ul>";
?>
</ul>
</body>
</html>