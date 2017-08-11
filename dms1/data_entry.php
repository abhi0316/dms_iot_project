<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);    
?>


<?php
$servername="localhost";
$dbname="Y2017";
$username="root";
$password="root";


$sql= mysqli_connect($servername,$username,$password,$dbname);
if ($sql)
{
echo "connect successful";
$a="ALTER TABLE Y2017 ADD ".date('m')."lm varchar(10)";

if ($sql->query($a) ===True)
 {
 	echo "created";
 }
$b="ALTER TABLE Y2017 ADD ".date('m')."tm varchar(10)";
 
if ($sql->query($b) ===True)
 {
 	echo "created";
 }

}
?>