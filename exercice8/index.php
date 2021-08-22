<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablaux associative</title>
</head>
<body>
 
    <?php
    $mesinformation=["nom :" => "khadija" , "prenom :" => "lahmar" , "age :" => 21 , "sexe :" => "femme" ,"ville :" => "youssoufia", "origine :" => "youssoufia"  ];
    $mesinformation += ['formation :' => 'web dev'];
    foreach ($mesinformation as $key => $value) :
        echo $key.' ' .$value. '<br>' ;
    endforeach;
    
    ?>
</body>
</html>