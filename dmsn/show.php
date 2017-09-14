<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);    
?>


<?php
//echo "<meta http-equiv='refresh' content='1'>";
$hostname='localhost';
$username='root';
$password='root';
$dbname='test';

$x=$_GET['x'];

$y=$_GET['y'];
$z=$_GET['z'];
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];






$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{
  
$add ="INSERT INTO uidone (date, time, amount, temperature ,conductivity) VALUES ('".$x."','".$y."','".$z."','".$a."','".$b."')";
echo $add;
$df=mysqli_query($sql,$add);
echo $df;
if ($df)
{
echo "done";
}

else 
{
echo "no";
}
$fetch= "SELECT * FROM uidone";
$fetch1=mysqli_query($sql,$fetch);
if (mysqli_num_rows($fetch1) > 0)
{
$i =0;
$a = array();
$b = array();
$c = array();
while($row=mysqli_fetch_assoc($fetch1))
{
    
  $a[$i]=$row['date'];
  $b[$i] = $row['time'];
  $c[$i] = $row['amount'];
  $d[$i]= $row['temperature'];
  $e[$i]=$row['conductivity'];
echo "date:" .$a[$i]. "time:" .$b[$i]. "amount:" .$c[$i]. "temperature:" .$d[$i]. "conductivity:" .$e[$i]. "<br>";
    $i =$i+1;
}
}



}
?>
