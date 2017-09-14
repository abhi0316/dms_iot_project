
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




$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{
 //if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('date', 'time', 'amount', 'temp', 'conductivity'));  
      $query = "SELECT * from ".$x;  
      $result = mysqli_query($sql, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 //}  
}
?>
