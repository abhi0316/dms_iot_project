<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);    
?>



<?php

$hostname='localhost';
$username='root';
$password='root';
$dbname='test';


$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{
	




$fetch= "SELECT * FROM test";
$fetch1=mysqli_query($sql,$fetch);
if (mysqli_num_rows($fetch1) > 0)
{
$i =0;
$a = array();
$b = array();
while($row=mysqli_fetch_assoc($fetch1))
{
    
	$a[$i]=$row['date'];
	$b[$i] = $row['time'];

    $i =$i+1;
}


	print_r($a);
	echo $b[6];
	$i =$i +1;










}



}
?>