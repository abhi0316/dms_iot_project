<?php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);    
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  
  <title></title>
  <script src="highcharts.js"></script>
<script src="jquery.min.js"></script>
<script src="mp.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="tab.css"-->
</head>
<body onload="currentSlide(1)">
 

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
<button class="button" id="button_red" onclick="window.location='table1.php?db=26C435AC';"  style="vertical-align:middle"><span>A01 </span></button>
<button class="button" id="button_red1" onclick="window.location='table1.php?db=36B43DAC';"><span>A02 </span></button>
<button class="button" id="button_yellow" onclick="window.location='table1.php?db=561241AC';" style="vertical-align:middle"><span>A03 </span></button>
<button class="button" onclick="window.location='table1.php?db=666033AC';" style="vertical-align:middle"><span>A04 </span></button>
<button class="button" onclick="window.location='table1.php?db=766A3CAC';" style="vertical-align:middle"><span>A05 </span></button>
<button class="button" onclick="window.location='table1.php?db=C62743AC';" style="vertical-align:middle"><span>A06 </span></button>
<button class="button" onclick="window.location='table1.php?db=C65C33AC';" style="vertical-align:middle"><span>A07 </span></button>
<button class="button" onclick="window.location='table1.php?db=C82A1B00';" style="vertical-align:middle"><span>A08 </span></button>
<button class="button" onclick="window.location='table1.php?db=E60940AC';" style="vertical-align:middle"><span>A09 </span></button>
<button class="button" onclick="window.location='table1.php?db=F557FCD1';" style="vertical-align:middle"><span>A10 </span></button>
<button class="button" onclick="window.location='table1.php?db=F58DFCD1';" style="vertical-align:middle"><span>A11 </span></button>
<button class="button" onclick="window.location='table1.php?db=uidone';" style="vertical-align:middle"><span>A12</span></button>
<button class="button" onclick="window.location='table1.php?db=uidone';" style="vertical-align:middle"><span>A13 </span></button>
<button class="button" onclick="window.location='table1.php?db=uidone';" style="vertical-align:middle"><span>A14 </span></button>
<button class="button" onclick="window.location='table1.php?db=uidone';" style="vertical-align:middle"><span>A15 </span></button>
</div>


  <div style= "height:250px; width:1108px; background-color:#FFFFFF;   float:left; ">
<div style="float:left;width:350px;height:250px;border:1px solid lightblue;text-align:center;">
<table style="width:200px; height:200px;">
  
  <tr>
   <p>CATTLE DETAILS:</p>    


    <td >UID:</td>
    <td><input type="text" name="name1" size="5" value="1234ADG" ></td>
    <td>Procurement:</td>
    <td><input type="text" name="name1"size="5" value="Yakkara"></td>
  </tr>
  <tr>
    <td>Location:</td>
    <td><input type="text" name="name1"size="5" value="B12" ></td>
    <td>Lactation:</td>
    <td><input type="text" name="name1"size="5" value="3" ></td>
  </tr>
<tr>
    <td>Dob:</td>
    <td><input type="text" name="name1" size="5" value="1/09/12"></td>
    <td>Active quarters:</td>




    <td><input type="text" name="name1"size="5" value="4"></td>
  </tr>

<tr>
    <td>Age:</td>
    <td><input type="text" name="name1"size="5" value="5"></td>
    <td>Avg Milk:</td>
    <td><input type="text" name="name1"size="5" value="11.35" ></td>
  </tr>
<tr>
    <td>Breed:</td>
    <td><input type="text" name="name1"size="5" value="HFCT" ></td>
    
  </tr>

    

  
</table>
</div>
<div style="float:left;width:250px;border-radius: 6px;height:250px;border:1px solid lightblue;text-align:center;">
<table style="width:200px; height:200px;">
  
  
    <p>REMINDERS:</p>
  <tr>
    <td>Insemination:</td>
    <td><input type="text" name="name1"size="5" height="3" value="10/09/17" ></td>
    <td><input type="text" name="name1"size="1" value="8"></td>
  </tr>
<tr>
    <td>Deworming:</td>
    <td><input type="text" name="name1" size="5" value="13/09/17"></td>
    <td><input type="text" name="name1"size="1" value="11" ></td>
  </tr>

<tr>
    <td>Vaccination:</td>
    <td><input type="text" name="name1"size="5" value="18/05/17"></td>
    <td><input type="text" name="name1"size="1" value="94" ></td>
  </tr>
<tr>
    <td>SeventhMonth:</td>
    <td><input type="text" name="name1"size="5" value="17/03/17" ></td>
    <td><input type="text" name="name1"size="1" value="156" ></td>    
  </tr>

<tr>
    <td>Delivery:</td>
    <td><input type="text" name="name1"size="5" value="12/1/17" ></td>
    <td><input type="text" name="name1"size="1" value="218"></td>    
  </tr>
    

  
</table>
</div>

<div style="float:left;width:502px;height:250px;border:1px solid lightblue;text-align:center;border-radius: 6px;">
<p>REMARKS:</p>

<textarea 
 name="a"></textarea>
<div style="height:65px;width:502px;">
<p style="float:left;">Medical Details:</p>

<p style="float:left; padding-left:10px;">exp-total:<p>
<input type ="text" name="exp" value="455" style="float:left; margin-left:10px;">
<tr>	
<div class="hell"><button class="click" onclick=fn_on(); id ="demo" >New</button><span class="heaven" id="heaven"> <input type ="text" value="date"> <select><option value="hello">med1</option><option value="hello">med1</option><option value="hello">med1</option><option value="hello">med1</option></select>  <input type ="text"value="dose"><input type ="text"value="reason"><input type ="text" value="cost">
<br>
<br>
<input type ="text" value="6/6/17" readonly> <input type ="text" value="med3" size="5" readonly> <input type ="text" value="500mg" readonly><input type ="text" value="Mastitis" readonly><input type ="text" value="100" readonly>
<br>
<br>
<input type ="text" value="7/7/17" readonly> <input type ="text" value="med1" size="5" readonly> <input type ="text" value="500mg" readonly><input type ="text" value="Mastitis" readonly><input type ="text" value="200" readonly>
<br>
<br>
<input type ="text" value="8/8/17" readonly> <input type ="text" value="med2" size="5" readonly> <input type ="text" value="500mg" readonly><input type ="text" value="Fever" readonly><input type ="text" value="155" readonly>
</span>
<span class="heaven1" id="heaven1">  
  <br><br><input type ="text" size="100%" value="1.Productivity < 20%." readonly>
  <br>
<br>
<input type ="text" value="2.conductivity < 2%." size="100%" readonly> 
<br>
<br>

<button  onclick="fn3('t')" class="dropbtn" >Resolve</button> <button onclick="fn3()" class="dropbtn" >Remind me later</button> 

 


</span>
<span class="heaven2" id="heaven2">  
  <br><br><input type ="text" size="100%" value="1.Productivity < 18%." readonly>
  <br>
<br>
<input type ="text" value="2.conductivity < 1%." size="100%" readonly> 
<br>
<br>

<button  onclick="fn4('t')" class="dropbtn" >Resolve</button> <button onclick="fn4()" class="dropbtn" >Remind me later</button> 


</span>
<span class="heaven3" id="heaven3">  
  <br><br><input type ="text" size="100%" value="1.Productivity < 5%." readonly>
  <br>
<br>
<input type ="text" value="2.conductivity < .01%." size="100%" readonly> 
<br>
<br>

<button  onclick="fn5('t')" class="dropbtn" >Resolve</button> <button onclick="fn5()" class="dropbtn" >Remind me later</button> 


</span>


</div>
</div>

</div>

</div>
<br><br>
<div class ="main_graph">
<div class="graph_area">
<!--button class="morninggraph" onclick="currentSlide(1)">Morning</button>

<button class="morninggraph" onclick="currentSlide(2)">Evening</button>
<button class="morninggraph" onclick="currentSlide(3)">Temp</button>

</div-->


<button onclick="myFunctionp()" class="dropbtn">Productivity</button>
<div id="myDropdownp" class="dropdown-content">
    <button class="morninggraph" onclick="currentSlide(1)">morning</button>
     <button class="morninggraph" onclick="currentSlide(2)">evening</button>

    <!--a href="#contact">Contact</a-->
  </div>
  <button onclick="myFunctiont()" class="dropbtn">Temperature</button>
<div id="myDropdownt" class="dropdown-content">
    <button class="morninggraph" onclick="currentSlide(3)">morning</button>
     <button class="morninggraph" onclick="currentSlide(4)">evening</button>

    <!--a href="#contact">Contact</a-->
  </div>

<button onclick="myFunctionc()" class="dropbtn" >Conductivity</button>
<div id="myDropdownc" class="dropdown-content">
    <!--a href="javascript:currentSlide(1)">Morning</a>
    <a href="#about">Evening</a-->
     <button class="morninggraph" onclick="currentSlide(5)">Morning</button>
     <button class="morninggraph" onclick="currentSlide(6)">Evening</button>

    <!--a href="#contact">Contact</a-->
  </div>
 
<button class="dropbtn"  onclick="currentSlide(7)">Daydata</button>

</div>
<?php
$rec=$_REQUEST['db'];
$hostname='localhost';
$username='root';
$password='root';
$dbname='test';
$sql=mysqli_connect($hostname,$username,$password,$dbname);
if($sql)
{  
$fetch= "SELECT * FROM ".$rec;
$fetch1=mysqli_query($sql,$fetch);
if (mysqli_num_rows($fetch1) > 0)
{
$i =0;
$ii=0;
$cc =0;
$a = array();
$b = array();
$c = array();
$d = array();
$e = array();
$a1 = array();
$b1 = array();
$c1 = array();
$d1 = array();
$e1 = array();

while($row=mysqli_fetch_assoc($fetch1))
{
    
  
  $b[$ii] = $row['time'];
  if ($b[$ii] < 12)
 {
  $a[$i] = $row ['date'];
  $c[$i] = $row['amount'];
  $d[$i] = $row['temperature'];
  $e[$i] = $row['conductivity'];
    $i =$i+1;
}
else 
 {
$a1[$cc] =$row['date'];
$c1[$cc] = $row['amount'];
  $d1[$cc] = $row['temperature'];
  $e1[$cc] = $row['conductivity'];
$cc =$cc+1;
}
$ii =$ii+1;
}
}
}
?>




<div class="mySlides fade" id ="container">
  



<script>
var a =<?php echo json_encode($a,JSON_NUMERIC_CHECK); ?>;
var c =<?php echo json_encode($c,JSON_NUMERIC_CHECK); ?>;

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a
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
        data:c 
    }]
});



</script>











  </div>




<div class="mySlides fade" id ="container1">
<script>
var a1 =<?php echo json_encode($a1,JSON_NUMERIC_CHECK); ?>;
var c1 =<?php echo json_encode($c1,JSON_NUMERIC_CHECK); ?>;

Highcharts.chart('container1', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a1
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
        name: 'evening',
        data: c1
    }]


});

</script>


  </div>

<div class="mySlides fade" id="container2">
  <script>
var a =<?php echo json_encode($a,JSON_NUMERIC_CHECK); ?>;
var d =<?php echo json_encode($d,JSON_NUMERIC_CHECK); ?>;
Highcharts.chart('container2', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a
    },
    yAxis: {
        title: {
            text: 'temp (t)'
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
        name: 'Temp',
        data: d
    }]


});
</script>

  </div>
<div class="mySlides fade" id="container3">
  <script>
var a1 =<?php echo json_encode($a1,JSON_NUMERIC_CHECK); ?>;
var d1 =<?php echo json_encode($d1,JSON_NUMERIC_CHECK); ?>;
Highcharts.chart('container3', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a1
    },
    yAxis: {
        title: {
            text: 'temp (t)'
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
        name: 'Temp',
        data: d1 
   }]


});
</script>

  </div>

<div class="mySlides fade" id="container4">
  <script>
var a =<?php echo json_encode($a,JSON_NUMERIC_CHECK); ?>;
var e =<?php echo json_encode($e,JSON_NUMERIC_CHECK); ?>;
Highcharts.chart('container4', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a
    },
    yAxis: {
        title: {
            text: 'ohm'
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
        name: 'conductivity',
        data: e
    }]


});
</script>

  </div>
<div class="mySlides fade" id="container5">
  <script>
var a1 =<?php echo json_encode($a1,JSON_NUMERIC_CHECK); ?>;
var e1 =<?php echo json_encode($e1,JSON_NUMERIC_CHECK); ?>;
Highcharts.chart('container5', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    
    xAxis: {
        categories: a1
    },
    yAxis: {
        title: {
            text: 'ohm '
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
        name: 'conductivity',
        data: e1
    }]


});
</script>

  </div>
<div class="mySlides fade" id="container6">
  <script>
Highcharts.chart('container6', {
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
        name: 'litre',
        data: [11, 12,11.5,12.6,11,13.3,12,11,12.5,12.9,11.8,11,11.84]
    }]


});
</script>

  </div>


</div>
</body>
</html>
