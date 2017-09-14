var x;
function fn1()
{


var popup1 = document.getElementById("heaven1");
    popup1.classList.toggle("show");
 
}
function fn2()
{


var popup1 = document.getElementById("heaven2");
    popup1.classList.toggle("show");
 
}
function fn20()
{


var popup1 = document.getElementById("heaven3");
    popup1.classList.toggle("show");
 
}
function fn3(x)
{

var a=x;
if (a =='t')
{
alert("The issue has been marked as resolved");
 var elem = document.getElementById("button_red");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven1");
    popup1.style.visibility="hidden";
}
else
{
var elem = document.getElementById("button_red");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven3");
    popup1.style.visibility="hidden";

}


}
function fn4(x)
{

var a=x;
if (a =='t')
{
alert("The issue has been marked as resolved");
 var elem = document.getElementById("button_red1");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven2");
   popup1.style.visibility="hidden";
}
else
{
var elem = document.getElementById("button_red1");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven2");
   popup1.style.visibility="hidden";

}


}

function fn5(x)
{

var a=x;
if (a =='t')
{
alert("The issue has been marked as resolved");
 var elem = document.getElementById("button_yellow");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven3");
   popup1.style.visibility="hidden";
}
else
{
var elem = document.getElementById("button_yellow");
 elem.parentElement.removeChild(elem);
//var ignore = document.getElementById("button_red");
  //  ignore.style.backgroundColor="#1F90B2";
 var popup1 = document.getElementById("heaven3");
   popup1.style.visibility="hidden";

}


}


function fn_on()
{
var popup = document.getElementById("heaven");
    popup.classList.toggle("show");
    
   var x=document.getElementById("demo").innerHTML; 
    
  if (x == 'hide')
  {
   document.getElementById("demo").innerHTML = "New";

  }
else if(x == 'New')
{

document.getElementById("demo").innerHTML = "hide";
}

}


var slideIndex = 1;
showSlides(slideIndex);


function currentSlide(n) {
  //document.getElementById("myDropdownp").style.visibility="hidden";
  //document.getElementById("myDropdownt").style.visibility="hidden";
  //document.getElementById("myDropdownc").style.visibility="hidden";
   showSlides(slideIndex = n);
  
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("morninggraph");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}	
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  document.getElementById("myDropdownp").style.visibility="hidden";
  document.getElementById("myDropdownt").style.visibility="hidden";
  document.getElementById("myDropdownc").style.visibility="hidden";
  
  
  
}

function myFunctionp() {
   document.getElementById("myDropdownp").style.visibility="visible"
   document.getElementById("myDropdownp").classList.toggle("show");
   //document.getElementById("myDropdownp").style.visibility="visible";
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunctiont() {
   document.getElementById("myDropdownt").style.visibility="visible";
    document.getElementById("myDropdownt").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function myFunctionc() {
    document.getElementById("myDropdownc").style.visibility="visible";
    document.getElementById("myDropdownc").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
