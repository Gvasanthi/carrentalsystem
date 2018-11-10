<?php
$user='root';
$pass='';
$db= 'car';


$link="";
$flag=0;
$sql_u="";
$res="";
$res_u="";
$carid="";
$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
	
    $sql_u="delete from cardetails where `carid`='".$_GET['carid']."'";
	
    if(mysqli_query($link,$sql_u))
	header('refresh:1;URL=deletecaradmin.php');
    else
	echo"error";



?>