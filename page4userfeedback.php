<?php
$user='root';
$pass='';
$db= 'car';


$link="";
$flag=0;
$sql_u="";
$res="";
$res_u="";
$num="";
$rat="";
$yea="";
$sat="";
if(isset($_POST['submit'])){
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="Insert into `feedback`(`carnumber`,`rating`,`satisfy`) values('".$_POST['number']."','".$_POST['rate']."','".$_POST['satisfy']."')";


	
    $res_u=mysqli_query($link,$sql_u);
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="update `cardetails` set `rating`='".$_POST['rate']."' where carnumber='".$_POST['number']."'";

$res_u=mysqli_query($link,$sql_u);
	
   
    header('Location:trail.php');
}
?>
<html>

<body background="cartoon.jpg">
<form action="page4userfeedback.php"  method="post">
	

<h1 align=center>FEEDBACK</h1>
<h2 align=center>Your Feedback Mean A Lot To Us</h2>
<div class="frm1">
<div class="frm">
<p>Enter your car number</p>
<input type="text" name="number" placeholder="number" required="">

</div>

<br>
<br>
<br>

<div class="frm">
<p>Are you satisfied with the collections we offered?</p>

<input  type="radio" name="satisfy" value="no">Not satisfied
<input type="radio" name="satisfy" value="yes">Satisfied
<input type="radio" name="satisfy" value="happy">Most Satisfied
</div>
<br>
<br>
<br>
<div class="frm">
<p>Give us a over all rating</p>
<input type="radio" name="rate" value="1">One
<input type="radio" name="rate" value="2">Two
<input type="radio" name="rate" value="3">Three
<input type="radio" name="rate" value="4">Four
<input type="radio" name="rate" value="5">Five
</div>
<br>
<br>
<br>






<div class="frm">
<p align="center">

<input type="submit" name="submit" value="submit">
<input type="reset" value="cancel" onclick="window.location.href='page2user.php'"/>

</p>
</div>
</div>
</form>
</body>
</html>
<style>
.frm1{
	
		position: absolute;
		left:20%;
	}
	</style>
