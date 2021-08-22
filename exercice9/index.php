<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions et Booleans</title>
</head>
<body>
<?php
$tache=[" title" =>"tache" , "due" =>"21 mars" , "assigned_to" => "khadija" ,"done"=>true];
foreach ($tache as $key => $value) {
    
    if ($key == "done" && $value==true){
        $value = "DONE";
        
    } else if($key == "done" && $value==false ){
      $value = "DOING";
    }
    echo  $key.' ' ."=>" .$value.'<br>';
}

 

?>
    
</body>
</html>