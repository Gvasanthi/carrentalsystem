<?php
$user='root';
$pass='';
$db= 'car';


$link="";
$flag=0;
$sql_u="";
$res="";
$res_u="";
if(array_key_exists("submit",$_POST)){
	if($_POST['purchasedate']<date('Y-m-d'))
	{
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="Select * from cardetails where `carid`='".$_POST['car-id']."'";
	
    $res_u=mysqli_query($link,$sql_u);
    
    if(mysqli_num_rows($res_u)>0)
	{
	
		echo 'error';
		
		exit;
	}
else{	
	$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $query="Insert into `cardetails`(`model`,`carname`,`carnumber`,`carcolor`,`purchasedate`,`purchase price`,`price`) values(upper('".$_POST['car-model']."'),upper('".$_POST['car-name']."'),upper('".$_POST['car-number']."'),upper('".$_POST['car-color']."'),'".$_POST['purchasedate']."','".$_POST['car-price']."','".$_POST['dayprice']."')";

    
   	
	
    
    $res=mysqli_query($link,$query);
	header('Location:displycarsadmin.php');
	
    
    
	}
}
else
header('location:trial7.php');
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadminadd.css">
</head>



<body>
<div class="login-box">

<h1 style="color:orange">Enter details of car</h1>
<form class="frm" method="post">


<p style="color:orange;padding:15x"><font size=5"><b>Model</b></font></p>
<div class="frm">
<input type="text"  style="height:30;width=55;border-radius:20px;padding:20px" id="car-model" name="car-model" placeholder="Model" required="">
</div>
<p style="color:orange;padding:15x"><font size=5"><b>Name</b></font></p>
<div class="frm">
<input type="text" style="height:30;width=55;border-radius:20px;padding:20px" id="car-name" name="car-name" placeholder="Name" required="">
</div>
<p  style="color:orange;padding:15x"><font size=5"><b>Number</b></font></p>
<div class="frm">
<input type="text"  style="height:30;width=55;border-radius:20px;padding:20px" id="car-number" name="car-number" placeholder="number" required="">
</div>

<p style="color:orange;padding:15x"><font size=5"><b>Color</b></font></p>
<div class="frm">
<input type="text"  style="height:30;width=55;border-radius:20px;padding:20px" id="car-color" name="car-color" placeholder="color" required="">
</div>

<p style="color:orange;padding:15x"><font size=5"><b>PurchaseDate</b></font></p>
<div class="frm">
<input type="date"  style="height:30;width=55;border-radius:20px;padding:20px" id="purchasedate" name="purchasedate" placeholder="date" required="">
</div>
<p style="color:orange;padding:15x"><font size=5"><b>price</b></font></p>
<div class="frm">
<input type="text"style="height:30;width=55;border-radius:20px;padding:20px" id="car-price" name="car-price" placeholder="price" required="">
</div>
</div>
<p style="color:orange;padding:15x"><font size=5"><b>per day price</b></font></p>
<div class="frm">
<input type="text"  style="height:30;width=55;border-radius:20px;padding:20px" id="dayprice" name="dayprice" placeholder="dayprice" required="">
</div>
<br>
<br>
<div class="frm">
<input type="submit"  name="submit"   style="color:orange;background-color:white;height:20 ;width:100;border-radius:20px;padding:20px">
<input type="reset" value="cancel" style="color:orange;background-color:white;height:20 ;width:100;border-radius:20px;padding:20px" onclick="window.location.href='page2admin.php'"/>

</div>

</form>
</div>

</body>
</html>