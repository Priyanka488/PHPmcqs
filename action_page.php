<?php
//To make warnings disappear
error_reporting(0);
$a=$_POST["Q1"];
$b=$_POST["Q2"];
$c=$_POST["Q3"];
$d=$_POST["Q4"];
$e=$_POST["Q5"];
$f=$_POST["Q6"];
$g=$_POST["Q7"];
$h=$_POST["Q8"];
$i=$_POST["Q9"];
$j=$_POST["Q10"];
$marks=0;
if($a=="true") $marks++;
if($b=="true") $marks++;
if($c=="true") $marks++;
if($d=="true") $marks++;
if($e=="true") $marks++;
if($f=="true") $marks++;
if($g=="true") $marks++;
if($h=="true") $marks++;
if($i=="true") $marks++;
if($j=="true") $marks++;

 ?>
 <html><head><title>QUIZ RESULTS</title>

 <!-- Mirrored from www.w3schools.com/w3css/tryw3css_templates_cafe.htm by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 16:28:13 GMT -->



 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
 <style>
 body, html {
   height: 100%;
   font-family: "Inconsolata", sans-serif;
 }

 .bgimg {
   background-position: center;
   background-size: cover;
   background-image: url("images/coffeehouse.jpg");
   min-height: 75%;
 }

 .menu {
   display: none;
 }
 </style>

 <link id="avast_os_ext_custom_font" href="chrome-extension://mbckjcfnjmoiinpgddefodcighgikkgn/common/ui/fonts/fonts.css" rel="stylesheet" type="text/css"></head><body class="vsc-initialized" style="user-select: auto;">

 <!-- Links (sit on top) -->

 <!-- Header with image -->
 <header class="bgimg w3-display-container w3-grayscale-min" id="home">
   <div class="w3-display-middle w3-center">
     <span class="w3-text-white" style="font-size:90px">Quiz<br>Results</span>
   </div>

 </header>

 <!-- Add a background color and large text to the whole page -->
 <div class="w3-sand w3-grayscale w3-large">

 <!-- About Container -->
 <div class="w3-container" id="about">
   <div class="w3-content" style="max-width:700px">
     <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">
 <br>You scored <?php
 echo $marks."/10"; ?>

     </span></h5>

     <form action="index.html" method="post">
     1. Which two predefined variables are used to retrieve information from forms?
       <br>
       Correct Answer : $_GET & $_POST
   <br><br><br>

   2. When you use the $_POST variable to collect data, the data is visible to..
   <br>
   Correct Answer : only you
 <br><br><br>

 3. Which keyword is used to insert an input GUI inside form tag ?
 <br>
 Correct Answer : input tag
 <br><br><br>

 4. When you use the $_GET variable to collect data, the data is visible to..
 <br>
 Correct Answer : everyone
 <br><br><br>

 5. Which variable is used to collect form data sent with both the GET and POST methods?
 <br>
 Correct Answer : $_REQUEST
  <br><br><br>

 6. Which one of the following should not be used while sending passwords or other sensitive information?
 <br>
 Correct Answer : GET
  <br><br><br>

 7. Which attribute is used in HTML to name the input, which is later useful in PHP to retreive info ?
 <br>
 Correct Answer : name
  <br><br><br>

 8. Which attribute is used in HTML to specify the kind of input needed ?
 <br>
 Correct Answer : type
  <br><br><br>

 9.Choose the correct PHP starting and ending tag.
 <br>
 Correct Answer : &lt ?php  ?&gt
 <br><br><br>

 10. Which tag is used to specify a form in HTML?
 <br>
 Correct Answer : form tag
  <br><br><br>
 <p><button class="w3-button w3-black" type="submit">Back To Home</button></p>

 </form>



   </div>
 </div>

 <!-- Menu Container -->
 <div class="w3-container" id="menu">
   <div class="w3-content" style="max-width:700px">









   </div>
 </div>

 <!-- Contact/Area Container -->
 <div class="w3-container" id="where" style="padding-bottom:32px;">
   <div class="w3-content" style="max-width:700px">




   </div>
 </div>

 <!-- End page content -->
 </div>

 <!-- Footer -->
 <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
   <p>Made by Priyanka :)</p>
 </footer>

 <script>
 // Tabbed Menu
 function openMenu(evt, menuName) {
   var i, x, tablinks;
   x = document.getElementsByClassName("menu");
   for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
   }
   tablinks = document.getElementsByClassName("tablink");
   for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
   }
   document.getElementById(menuName).style.display = "block";
   evt.currentTarget.firstElementChild.className += " w3-dark-grey";
 }
 document.getElementById("myLink").click();
 </script>



 <!-- Mirrored from www.w3schools.com/w3css/tryw3css_templates_cafe.htm by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 16:28:15 GMT -->



 </body></html>
