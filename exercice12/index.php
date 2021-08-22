<?php
     $random= rand(1,100);
  
    for ($i=1; $i <=9 ; $i++) { 
         $nbr= readline("entre un nombre :");

         if ($i === 9) {
            echo "Allah i3awen";
        }
         elseif ( $nbr==$random){
             echo"Bravo";
             break;
         }
         elseif( $nbr<$random){
             echo"nombre donné trop petit \n";
         }
         elseif ($nbr>$random) {
             echo"nombre donné trop grand \n";         
        }
        
        
     }
     
    
    
    
?>




