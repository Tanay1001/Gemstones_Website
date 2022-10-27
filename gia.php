<html>
<link rel="stylesheet" type="text/css" href="cssmain.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<title>
Gemstone Types
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


.image{
width:60%;
border-radius:8px;
margin-bottom:10px;
}


.box{
width:33%;
float:left;
background-color:#fff;
pading:15px;
}

.box p{
font-size:15px;
line-height:28px;
height:0px;
overflow:hidden;
}

.box a{
display:inline-block;
color:#fff;
background-color:#2196f3;
text-decoration:none;
padding:10px 15px;
border-radius:8px;
margin-top:15px;
}

.box a:hover{
box-shadow:0 5px 5px rbga(0,0,0,0.2);
}

.box.showContent p{
height:auto;
}

.box.showContent a.readmore-btn{
background-color:red;
}

.division{
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}




.button{
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

</style>


<body>

<a href="#first" class="scroll top">TOP</a>
<a href="#last" class="scroll bottom">BOTTOM</a>
<div id="first"></div>


<div align="center" style="background-color:black">
<!--****LOGO AND TITLE****-->
<br>
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
<li><a href=main.php>&nbsp; Home &nbsp;</a>
      <ul>
      <li><a href="main.php#intro">Introduction</a></li>
      </ul>
</li>
<li><a href="diamonds.php">Diamonds</a>
      <ul>
      <li><a herf="diamonds.php#whatarediamonds">What are diamonds?</a></li>
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
<li><a  href="member.php">Member & feedback</a>
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



<br><br>


<h2><font color="#e3c676"><center>GIA</center></font></h2>
<h4>
You may have already heard or learned about the 4Cs of diamond quality: color, clarity, cut and carat weight. GIA created this standard, 
along with the scientific procedures for evaluating each "C" and the grading terminology used to describe them.
GIA does not mine diamonds, nor does it buy, sell or trade them commercially. It doesn't appraise diamonds and is not otherwise involved in diamond pricing or 
valuation. GIA operates independently of these commercial interests, ensuring that its diamond quality assessments are completely objective and unbiased.
If you want to know the quality of the diamond you're considering - and you should, because quality and price go hand in hand - then you should look for 
GIA-graded diamonds and the GIA diamond grading reports that will accompany them.
<center><a href="https://www.gia.edu/" class="button">Cilck to go to GIA website</a></center>
<h3><center>GIA CENTERS</center><h3>
<center>
<iframe src="https://www.google.com/maps/d/embed?mid=1GkF5hNAz8x9LnSu4d7E_aNBcbf-EXEZa" width="1300" height="500">
</iframe>
</center>
</h4>


<div id="last" align="center"></div>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>

<script>
$(".readmore-btn").on('click',function(){
$(this).parent().toggleClass("showContent");

var replaceText=$(this).parent().hasClass("showContent")? "Read Less" : "Read more";
$(this).text(replaceText);

});
</script>

</body>
</html> 