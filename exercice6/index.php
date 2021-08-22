<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop</title>
</head>
<body>
    <form action="index.php" method="get">
    <input type="text" name="nom" id="nom" placeholder="nom">
    <input type="number" name="poids" id="poids" placeholder="poids">
    <input type="number" name="tailleCm" id="taillecm" placeholder="taille en cm">
    <input type="submit" name="btnsubmit" id="btnsubmit" value="enter">
    </form>
    <?php

        $name= $_GET['nom'];
        $poidsKg= $_GET['poids'];
        $tailleCm= $_GET['tailleCm'];
        $taillem= $tailleCm/100;
        $hauteur= pow($taillem,2);
        $IMC= $poidsKg/$hauteur;
        echo 'le nom est : '.$name.' le resaultat IMC est: '.$IMC ;

    ?>
</body>
</html>