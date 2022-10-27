<html>
<link rel="stylesheet" type="text/css" href="cssmain.css">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


<?php
include('memberdatabase.php');
$msg="";
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$comment=mysqli_real_escape_string($con,$_POST['comment']);

mysqli_query($con,"insert into contact_us(name,email,mobile,comment) values('$name','$email','$mobile','$comment')");
$msg="Thank you!! We will soon get in touch with you";
}
?>

</head>
<title>
Member & Feedback
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
<li><a>Member & feedback</a>
      <ul>
      <li><a href="#memberform">Member form</a></li>
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
<snap id="memberform"></snap>
<!--****MEMBER FORM****-->
<h2><font color="#e3c676"><center>Membership form</center></font></h2>
<h4>
Our membership is absolutely free.All members will have acess to:<br>
-Our E-mail newsletter
-Free contents<br>
-New research<br>
-Magzines<br>
-Etc.<br>
Also dont forget to give us feedback in the comment section.Your feedback is valuable for us and may help improving your experience on this site.
</h4>
<center>
<div  id="divmember">
<form method="post" data-toggle="validator" role="form">
<div class="form-group">
<label class="control-label for="name">Name:
<input type="text" id="name" placeholder="Enter name" name="name" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" class="form-control" required/>
<small class="form-text text-muted">Must be a proper name</small>
<div class="help-block with-errors"></div>

<label class="control-label for="email">Email:
<input type="text" id="email" placeholder="Enter email" name="email" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$" class="form-control" required/>
<small class="form-text text-muted">Must be a proper email id</small>
<div class="help-block with-errors"></div>

<label class="control-label for="mobile">Mobile:
<input type="text" id="mobile" placeholder="Enter mobile" name="mobile" pattern="^[0-9]{10}$" class="form-control" required/>
<div class="help-block with-errors"></div>
<small class="form-text text-muted">Must be a proper mobile number</small>

Comment:<br>
<textarea id="name" name="comment" rows="7" cols="25" id="comment" name="comment"></textarea>
<br>
</div>
<button type="submit" name="submit" class="btn btn-default">Submit</button>
<button type="reset" class="btn">Reset</button>

<br><br>
<h3>
<span style="color:red;"><?php echo $msg ?></span>
</h3>
</form>
</div>
</center>

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

</body>
</html> 