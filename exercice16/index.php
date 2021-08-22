<?php 
// =============les dates============
// Q1===> 
 echo date('d/m/Y') .'<br>';
//  Q2===>
echo date('d/m/y') .'<br>';
// Q3===>
setlocale(LC_TIME, "fra_fra");  
echo strftime("%A %d %B %Y") .'<br>';

// Q4===>
echo time() .'<br>'; 
$day = mktime(15,0,0,8,2,2020);
echo date('l j F Y H\hi ', $day) . '<br>';
// Q5===>
  $date=mktime(00,00,00,5,16,2020);
 $temps= time() -$date;
 $days= ceil($temps/60/60/24);
 echo $days.'<br>';
//  Q6===>
echo cal_days_in_month(CAL_GREGORIAN ,2,2020) ."<br>";
// Q7===>
echo date('Y-m-d', strtotime( ' + 20 days')) ."<br>";
// Q8===>
echo date('Y-m-d', strtotime( ' -22 days'));
 
?>