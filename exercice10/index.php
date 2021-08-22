<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boucles</title>
</head>
<body>
    <?php
    for ($i=1; $i <=10 ; $i++) { 
        
        if( $i!=4 && $i!=9){
            echo " number : $i <br>";
        }
    }
    echo "<hr>";

    for ($i=1; $i <=10 ; $i++) { 
        $var1=$i*6;
            echo $var1 . ' ' ;
       } 
       echo "<hr>" ;
       $i=1;
       while ($i <= 10) {
           $var =$i*6;
          echo " $var";
           $i++;
              } 
              

    ?>
</body>
</html>