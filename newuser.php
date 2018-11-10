
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
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="Select * from user where `username`='".$_POST['username']."'";
	
    $res_u=mysqli_query($link,$sql_u);
    
    if(mysqli_num_rows($res_u)>0)
	{
	
		header('Location:trial6.php');
	}
else{	
	$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $query="Insert into `user`(`username`,`password`,`email`,`address`,`contact`) values('".$_POST['username']."','".$_POST['password']."','".$_POST['email-id']."','".$_POST['address']."','".$_POST['contact']."')";

    
    $res=mysqli_query($link,$query);
	header('Location:page2user.php');

	
    
    
	}
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="styleadminadd.css">
</head>
<body>
<div class="login-box">


<h1 style="color:orange">Register Here</h1>
<form class="frm" method="post">

<p style="color:orange;padding:15x"><font size=5"><b>Username</b></font></p>
<div class="frm">
<input type="text" onfocus="this.value=''" name="username" value=" " style="height:30;width=55;border-radius:20px;padding:20px" id="username" name="username" placeholder="Enter user" required>
</div>
<p style="color:orange;padding:15x"><font size=5"><b>Email-id</b></font></p>
<div class="frm">
<input type="text"  style="height:30;width=55;border-radius:20px;padding:20px" id="email-id" name="email-id" placeholder="Email" required>
</div>
<p style="color:orange;padding:15x"><font size=5"><b>Contact</b></font></p>
<div class="frm">
<input type="text" style="height:30;width=55;border-radius:20px;padding:20px" pattern="(?=.*\d).{10}" title="Must contain 10 digits" id="contact" name="contact" placeholder="contact" required>
</div>
<p style="color:orange;padding:15x"><font size=5"><b>Address</b></font></p>
<div class="frm">
<input type="text" style="height:30;width=55;border-radius:20px;padding:20px" id="address" name="address" placeholder="address">
</div>

<p style="color:orange;padding:15x"><font size=5"><b>Password</b></font></p>
<div class="frm">
<input type="password" onfocus="this.value=''" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase and lower case letter, and atleast 6 or more characters" style="height:30;width=55;border-radius:20px;padding:20px" id="password" name="password" placeholder="Enter password" required="**">
</div>
<br>
<br>
<div class="frm">
<input type="submit"  name="submit" style="color:orange;background-color:white;height:20 ;width:100;border-radius:20px;padding:20px" >
<input type="reset" value="cancel" style="color:orange;background-color:white;height:20 ;width:100;border-radius:20px;padding:20px" onclick="window.location.href='index.php'"/>
</div>

</form>
</div>

</body>
</html>