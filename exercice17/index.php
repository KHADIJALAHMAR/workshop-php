<?php
// =======Q1=========
 $nom=file_get_contents('dictionnaire.txt', true);
 $var=explode("\n",$nom );
 $var2= count($var);
  echo" le nombre de mot : $var2   <br>" ;
// ========Q2=========
$i=0;
$j=0;
foreach ($var as  $value) {
   if (strlen($value)==15 ) {
     $i++;
   }
   // =========Q3=========
   if(strpos($value,"w") == true){
    $j++;
  }
  $d=0;
  if(substr ($value ,"q",-1)){
  $d++;
  }
}
echo "le nombre des mot qui contient 15 characteres sont : $i <br>";
echo $j;
echo $d;
?>