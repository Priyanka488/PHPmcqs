<html><head><title>PHP FORM QUIZ</title>

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
    <span class="w3-text-white" style="font-size:90px">PHP<br>Quiz</span>
  </div>

</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">
<?php
$a  = $_GET["Name"];
echo "Hey ".$a;
 ?><br>Here goes your quiz !

    </span></h5>

    <form action="action_page.php" method="post">
    1. Which two predefined variables are used to retrieve information from forms?
      <br>
  <input type="radio" name="Q1" value="false"> $GET & $SET <br>
  <input type="radio" name="Q1" value="true"> $_GET & $_POST<br>
  <input type="radio" name="Q1" value="false"> $__GET & $__SET<br>
  <input type="radio" name="Q1" value="false"> GET & SET<br>
  <br>

  2. When you use the $_POST variable to collect data, the data is visible to..
    <br>
<input type="radio" name="Q2" value="false"> none <br>
<input type="radio" name="Q2" value="true"> only you<br>
<input type="radio" name="Q2" value="false"> everyone<br>
<input type="radio" name="Q2" value="false"> selected few <br>
<br>

3. Which keyword is used to insert an input GUI inside form tag ?
<br>
<input type="radio" name="Q3" value="false"> checkboxes<br>
<input type="radio" name="Q3" value="false"> radio button tag<br>
<input type="radio" name="Q3" value="true"> input tag<br>
<input type="radio" name="Q3" value="false"> inputText tag <br>
<br>
4. When you use the $_GET variable to collect data, the data is visible to..
<br>
<input type="radio" name="Q4" value="false"> none <br>
<input type="radio" name="Q4" value="false"> only you<br>
<input type="radio" name="Q4" value="true"> everyone<br>
<input type="radio" name="Q4" value="false"> selected few <br>
<br>
5. Which variable is used to collect form data sent with both the GET and POST methods?
<br>
<input type="radio" name="Q5" value="false"> $BOTH<br>
<input type="radio" name="Q5" value="false"> $_BOTH<br>
<input type="radio" name="Q5" value="false">  $REQUEST<br>
<input type="radio" name="Q5" value="true">  $_REQUEST <br>
<br>

6. Which one of the following should not be used while sending passwords or other sensitive information?
<br>
<input type="radio" name="Q6" value="true"> GET<br>
<input type="radio" name="Q6" value="false"> POST<br>
<input type="radio" name="Q6" value="false"> REQUEST<br>
<input type="radio" name="Q6" value="false"> NEXT <br>
<br>
7. Which attribute is used in HTML to name the input, which is later useful in PHP to retreive info ?
<br>
<input type="radio" name="Q7" value="false"> value<br>
<input type="radio" name="Q7" value="true"> name<br>
<input type="radio" name="Q7" value="false"> type<br>
<input type="radio" name="Q7" value="false"> phpVar<br>
<br>
8. Which attribute is used in HTML to specify the kind of input needed ?
<br>
<input type="radio" name="Q8" value="false"> value<br>
<input type="radio" name="Q8" value="false"> phpVar<br>
<input type="radio" name="Q8" value="true"> type<br>
<input type="radio" name="Q8" value="false"> name<br>
<br>
9.Choose the correct PHP starting and ending tag.
<br>
<input type="radio" name="Q9" value="true"> &lt ?php  ?&gt<br>
<input type="radio" name="Q9" value="false"> ?php  ?<br>
<input type="radio" name="Q9" value="false"> ?php  ?&gt<br>
<input type="radio" name="Q9" value="false"> &lt ?php  ?<br>
<br>
10. Which tag is used to specify a form in HTML?
<br>
<input type="radio" name="Q10" value="true"> form tag<br>
<input type="radio" name="Q10" value="false"> input tag<br>
<input type="radio" name="Q10" value="false"> action tag<br>
<input type="radio" name="Q10" value="false"> name tag<br>
<br>
<br>
<br>
  <p><button class="w3-button w3-black" type="submit">Submit</button></p>
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
