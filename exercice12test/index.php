<?php

$random=rand(1,100);
for ($i=0; $i <=8 ; $i++) { 
    $user= readline("entre le nombre :");
    if($i==8){
    echo"khroj";
    break;
}
    elseif( $user==$random){
        echo"bravo";
        break;
    }

    elseif($user<$random){
        echo"nombre donné trop petit";
    }
    elseif ($user>$random) {
       echo"nombre donné trop grand"; 
    }
}











?>