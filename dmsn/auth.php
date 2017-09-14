<?php
if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW'])) {
header("WWW-Authenticate: Basic realm=\"Please enter your username and password to proceed further\"");
header("HTTP/1.0 401 Unauthorized");
print "Oops! It require login to proceed further. Please enter your login detail\n";
exit;
} else {
if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin') {
$x= date("d.m") ;
$y= date("G");
//echo "<meta http-equiv='refresh' content='1'>";
$hostname='localhost';
$username='root';
$password='root';
$dbname='test';
$uid = $_GET['uid'];
//$x=$_GET['x'];

//$y=$_GET['y'];
$z=$_GET['z'];
$a=$_GET['a'];
$b=$_GET['b'];






$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{
  
$add ="INSERT INTO ".$uid." (date, time, amount, temperature ,conductivity) VALUES ('".$x."','".$y."','".$z."','".$a."','".$b."')";
//echo $add;
$df=mysqli_query($sql,$add);
//echo $df;
if ($df)
{
echo "connected";
}

else 
{
echo "not connected";
}
}
}

}
?>
