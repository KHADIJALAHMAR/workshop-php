<?php
function YouCode($age) : bool{
    if( $age>17 && $age<34){
        return true;
    }
    else{
        return false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
  <form action="index.php" method="get">
    <input type="number" name="age"placeholder="age" >
    <input type="submit" name="btn" value="entrer">
  </form>
  <?php
   if (YouCode((int)$_GET['age'])){
       echo"<h3>welcome to youcode</h3>";
   }
   else{
    echo"<h3>go away</h3>";
   }

?>
</body>
</html>