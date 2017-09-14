
<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);    
?>


<?php
$hostname='localhost';
$username='root';
$password='root';
$dbname='test';
$uid = $_GET['uid'];
$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{
$table_add= "CREATE TABLE " .$uid. " (date VARCHAR(10),amount VARCHAR(15), time VARCHAR(15), temperature VARCHAR(20), conductivity VARCHAR(15))";

$make = mysqli_query($sql,$table_add); 

if ($make)
{
echo "entry created successfully.";
}

}
?>
