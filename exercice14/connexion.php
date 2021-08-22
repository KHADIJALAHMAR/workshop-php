<?php
session_start();
$_SESSION['nom']="khadija";
$_SESSION['color']="black";
echo 'hello' . $_SESSION['nom'] .'</br>';
echo $_SESSION['color'];
?>