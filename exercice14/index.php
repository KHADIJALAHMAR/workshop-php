<?php
$name=$_GET['nome'];
if (isset($_GET['btn1'])) {
    setcookie('name',$name,time()+3600,'/');
    echo"bienvenue";
} else {
    echo"by";
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
<form action="index.php" method="get" >
    <input type="text" name="nome"></input>
    <input type="submit" name="btn1" value="entre"></input>

</form>
</body>
</html>