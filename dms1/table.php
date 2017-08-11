
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  
  <title></title>
  <script src="highcharts.js"></script>
<script src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="tab.css">
<script>
function fn()
{
var popup = document.getElementById("heaven");
    popup.classList.toggle("show");
}
</script>
</head>
<style>
</style>
<body>
 

<div class="tab" >
  <button class="click" >Mainview</button>
  <button class="click" >Fieldview</button>
  <button class="click" >Other</button>
  <button class="click" >Help?</button>
</div>

<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>





<div style=" height:250px; width:180px; overflow:auto; border:2px solid lightblue;float:left;border-radius: 6px;margin-left:20px">
<button class="button" onclick="alert('Hello world!')" style="vertical-align:middle"><span>A21 </span></button>
<button class="button" style="vertical-align:middle"><span>A23 </span></button>
<button class="button" onclick="alert('Hello world!')" style="vertical-align:middle"><span>BC2 </span></button>
<button class="button" style="vertical-align:middle"><span>BC7 </span></button>
<button class="button" style="vertical-align:middle"><span>AE3 </span></button>
<button class="button" style="vertical-align:middle"><span>AE3 </span></button>
<button class="button" style="vertical-align:middle"><span>AE3 </span></button>
<button class="button" style="vertical-align:middle"><span>AE3 </span></button>
<button class="button" style="vertical-align:middle"><span>BA3 </span></button>
<button class="button" style="vertical-align:middle"><span>GE3 </span></button>
<button class="button" style="vertical-align:middle"><span>RA3 </span></button>
<button class="button" style="vertical-align:middle"><span>FA3</span></button>
<button class="button" style="vertical-align:middle"><span>BA3 </span></button>
<button class="button" style="vertical-align:middle"><span>GA3 </span></button>
<button class="button" style="vertical-align:middle"><span>RE3 </span></button>
</div>


  <div style= "height:250px; width:1108px; background-color:#FFFFFF;   float:left; ">
<div style="float:left;width:350px;height:250px;border:1px solid lightblue;text-align:center;">
<table style="width:200px; height:200px;">
  
  <tr>
   <p>CATTLE DETAILS:</p>    


    <td >UID:</td>
    <td><input type="text" name="name1" size="5" ></td>
    <td>Procurement:</td>
    <td><input type="text" name="name1"size="5" ></td>
  </tr>
  <tr>
    <td>Location:</td>
    <td><input type="text" name="name1"size="5" ></td>
    <td>Lactation:</td>
    <td><input type="text" name="name1"size="5" ></td>
  </tr>
<tr>
    <td>Dob:</td>
    <td><input type="text" name="name1" size="5"></td>
    <td>Active quarters:</td>
    <td><input type="text" name="name1"size="5" ></td>
  </tr>

<tr>
    <td>Age:</td>
    <td><input type="text" name="name1"size="5"></td>
    <td>Avg Milk:</td>
    <td><input type="text" name="name1"size="5" ></td>
  </tr>
<tr>
    <td>Breed:</td>
    <td><input type="text" name="name1"size="5" ></td>
    
  </tr>

    

  
</table>
</div>
<div style="float:left;width:250px;border-radius: 6px;height:250px;border:1px solid lightblue;text-align:center;">
<table style="width:200px; height:200px;">
  
  
    <p>REMINDERS:</p>
  <tr>
    <td>Insemination:</td>
    <td><input type="text" name="name1"size="5" ></td>
    <td><input type="text" name="name1"size="1" ></td>
  </tr>
<tr>
    <td>Deworming:</td>
    <td><input type="text" name="name1" size="5"></td>
    <td><input type="text" name="name1"size="1" ></td>
  </tr>

<tr>
    <td>SeventhMonth:</td>
    <td><input type="text" name="name1"size="5"></td>
    <td><input type="text" name="name1"size="1" ></td>
  </tr>
<tr>
    <td>Vaccination:</td>
    <td><input type="text" name="name1"size="5" ></td>
    <td><input type="text" name="name1"size="1" ></td>    
  </tr>

<tr>
    <td>Delivery:</td>
    <td><input type="text" name="name1"size="5" ></td>
    <td><input type="text" name="name1"size="1" ></td>    
  </tr>
    

  
</table>
</div>

<div style="float:left;width:502px;height:195px;border:1px solid lightblue;text-align:center;border-radius: 6px;">
<p>REMARKS:</p>

<textarea cols="69" rows="9"
 name="a"></textarea>
<div style="height:55px;width:502px;border:1px solid lightblue;">
<p style="float:left;padding-top:7px;">Medical Details:</p>

<p style="float:left; padding-left:10px;padding-top:7px;">exp-total:<p>
<input type ="text" name="exp"style="float:left; margin-left:10px;">
<tr>	
<div class="hell"><button class="click"onclick=fn();>New</button><span class="heaven" id="heaven"> <input type ="text" value="date"> <select><option value="hello">med1</option><option value="hello">med1</option><option value="hello">med1</option><option value="hello">med1</option></select>  <input type ="text"value="dose"><input type ="text"value="reason"><input type ="text" value="cost"></span></div>
</div>
</div>

</div>

<div id="container" style="width: 1300px;border-radius: 6px; height: 350px;top:100%">


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
}



}
?>


<script>
var a =<?php echo json_encode($a,JSON_NUMERIC_CHECK); ?>;
var b =<?php echo json_encode($b,JSON_NUMERIC_CHECK); ?>;

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: ['1', '2', '3']
    },
    yAxis: {
        title: {
            text: 'litre (l)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'morning',
        data: a
    }, {
        name: 'evening',
        data: b
    }]
});

</script>


</div>
</body>
</html>

    




 