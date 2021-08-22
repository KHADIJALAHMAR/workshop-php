<?php
    session_start();

    if (isset($_POST['submit']) && isset($_FILES['testfil'])){
             // =======variable POST=========
        $nam=$_POST['prénom'];
        $prenom=$_POST['nom'];
        $civ= $_POST['select'];
        $fil=$_FILES['testfil'];
            // =======variable GET=========
        // $nam=$_GET['prénom'];
        // $prenom=$_GET['nom'];
        // $civ= $_GET['select'];
            // =========session post=========
       // $_SESSION["prenom"] = $_POST['prénom'];
        // $_SESSION["nom"] = $_POST['nom'];
        // $_SESSION["civ"] = $_POST['select'];
              // ==Methode GET ssesion========
        //  $_SESSION["prenom"] = $_GET['prénom'];
        //  $_SESSION["nom"] = $_GET['nom'];
        // $_SESSION["civ"] = $_GET['select'];
            // header("Location: user.php");
        echo " <h1>Bienvenue $civ  $prenom  $nam  </h1>";
       $newfil=pathinfo($fil['name'],PATHINFO_EXTENSION);
      //    $newfile=pathinfo($file['name']);
                // echo $newfile['extension'];

                // if ($newfile['extension'] ==='pdf') {
                //    echo"c'est un pdf ";
    
        if ($newfil=='pdf') {
            echo" c'est un pdf";
        }
        else {
            echo" n'est pas un pdf";
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- pour test get post -->
    <form action="index.php" method="POST">
        <input type="text" name="nom" placeholder="entre nom"></input>
        <input type="text" name="prénom" placeholder="entre le prénom"></input>
        <select name="select" id="slt">
            <option value="Mme">Madame</option>
            <option value="Mr">Monsieur</option>
        </select>
        <input type="submit"  name="submit" value="envoyer"></input>
    </form>
    <!--cas ajouter un file  -->
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="entre nom"></input>
        <input type="text" name="prénom" placeholder="entre le prénom"></input>
        <select name="select" id="slt">
            <option value="Mme">Madame</option>
            <option value="Mr">Monsieur</option>
        </select>
        <input type="file" name="testfil">
        <input type="submit"  name="submit" value="envoyer"></input>
    </form>
</body>
</html>