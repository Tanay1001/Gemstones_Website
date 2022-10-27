<html>
<head>
<link rel="stylesheet" type="text/css" href="cssmain.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="main.js" defer></script>
</head>

<title>
Home
</title>

<style>
.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 102px;
}
</style>

<body>

<a href="#first" class="scroll top">TOP</a>
<a href="#last" class="scroll bottom">BOTTOM</a>
<div id="first"></div>

<div align="center" style="background-color:black">
<!--****LOGO AND TITLE****-->
<center>
<table>
<tr>
<td><img class="classlogo" src="logo.jpg"></td>
<td><h1 class="classname"><font color="#e3c676">Diamonds and Gemstones</font></h1></td>
<tr>
</table>
</center>
<hr>
</div>

<div class="header" id="myHeader">
<!--****MENU****-->
<ul>
<li><a>&nbsp; Home &nbsp;</a>
      <ul>
      <li><a href="#intro">Introduction</a></li>
      </ul>
</li>
<li><a href="diamonds.php">Diamonds</a>
      <ul>
      <li><a href="diamonds.php#whatarediamonds">What are diamonds?</a></li>
      <li><a href="diamonds.php#howaretheyformed">How are they formed?</a></li>
      <li><a href="diamonds.php#whyaretheyfamous">Why are they famous?</a></li>
      <li><a href="diamonds.php#wherearetheyfound">Where are they found?</a></li>
      <li><a href="diamonds.php#4csindiamonds">4cs in diamond</a></li>
      </ul>
</li>
<li><a href="gemstones.php">Gemstones</a>
      <ul>
      <li><a href="gemstones.php#whataregemstones">What are gemstones?</a></li>
      <li><a href="gemstones.php#howaregemstonesformed">How are they formed?</a></li>
      <li><a href="gemstones.php#whyaregemstonesfamous">Why are they famous?</a></li>
      <li><a href="gemstones.php#typesofgemstones">Types of gemstones</a></li>
      </ul>
</li>
<li><a href="gallery.php">Gallery</a>
      <ul>
      <li><a href="gallery.php">Gallery</a></li>
      </ul>
</li>
<li><a href="member.php">Member & feedback</a>
      <ul>
      <li><a href="member.php#memberform">Member form</a></li>
      </ul>
</li>
<li><a href="gemology.php">Gemmology & GCI</a>
      <ul>
      <li><a href="gemology.php#whatisgemology">What is gemology?</a></li>
      <li><a href="gemology.php#whatisgci">What is GCI?</a></li>
      <li><a href="gemology.php#whatisgia">What is GIA?</a></li>
      <li><a href="gemology.php#gemologycareers">Gemology careers</a></li>
      </ul>
</li>
</ul>
</div>


<!--****INTRODUCTION****-->
<snap id="intro">
<br><br>
<h2><font color="#e3c676"><center>Introduction to our webpage</center></font></h2>
<h3><center>A TRADITION OF SCIENCE AND EDUCATION</center><h3>
<h4>The aim of this website is to share knowledge of gems and gemstones and making them 
acessible to everone at no cost.<br>Buying a diamond and a gem is an exiciting experience
but it is also filled with unknowns.Are they natural?,treated?,syntehetic?or imitation?
All gem buyers have the right to know what they are buying.We give them the unbiased knowledge
and how to check the labrotary report to make an informed purchase.We define the research
based standards and best practices for evaluating and describing the qualities of gems.So what
are you wating for lets get into the facinating world of gems!
</h4>
<center>
<header class="intro">
<img src="home1.jpg" class="slideshow-img">
<img src="home2.jpg" class="slideshow-img">
<img src="home3.jpg" class="slideshow-img">
</header>
</center>
</snap>

<div id="last"></div>

<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html> 