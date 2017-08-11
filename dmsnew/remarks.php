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
$a="INSERT INTO remarks (id,reason) VALUES (".date('d.m').",'this is a project intended to use in dairy farms')";

if ($sql->query($a) ===True)
 {
 	echo "created";
 }

}

?>