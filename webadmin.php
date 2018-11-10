<?php
$user='root';
$pass='';
$db= 'car';


$link="";
$flag=0;
$sql_u="";
$res="";
$res_u="";
$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="Set GLOBAL event_scheduler='ON'";
	
    $res_u=mysqli_query($link,$sql_u);

if(array_key_exists("submit",$_POST)){
    $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
    $sql_u="Select * from admin where `username`='".$_POST['username']."' and `password`='".$_POST['password']."'";
	
    $res_u=mysqli_query($link,$sql_u);
    
    if(mysqli_num_rows($res_u)>0)
	{
		header('Location:page2admin.php');

	}
else{	
		header("Location:webadmin.php?error=1");
	
	//exit;
	}
}

?>

<html>
<head>
<title>Transparent login form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
<img src="car1.jpg" class="maggi">

<h1>login here</h1>
<form class="frm" method="post">

<p>Username</p>
<div class="frm">
<input type="text" onfocus="this.value=''" name="username" value=" " placeholder="Enter username">
</div>

<p>Password</p>
<div class="frm">
<input type="password" onfocus="this.value=''" name="password" value="" placeholder="Enter password">
</div>
<div class="frm">
<input type="submit"  name="submit"  >
</div>

</form>
</div>

</body>
</html>
<?php
if(isset($_GET['error'])==true)
{
	header('Location:trial3.php');
}
?>
