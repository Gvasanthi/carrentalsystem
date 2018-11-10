
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesearch.css">
</head>
<body>
<div id="pop" class="pop">
    <p align="center">THANK YOU FOR USING OUR SERVICE</p>
    <p align="center" style="color: red">Have Hard Copy Of This Page For The Reference</p> 
<p align="center">SELECTED CAR DETAILS</p>






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
$execres="";
$abc="";
$abcd="";
$efg="";
$efgh="";
//$dated="";
//$priced="";
//$res1="";
$i="";
//$ii="";

$abc=$_GET['carid'];
//echo "$abc";
$abcd= $_GET['car1'];
//echo "$abcd";
$efgh= $_GET['car2'];
//echo "$efgh";
$dated= $_GET['time1'];
//$dated=(int)"10";
//echo $dated;
//$i=(int)$dated;
$priced=$_GET['price'];
//echo $priced;
//$res1=$i*$ii;
//echo $ii;
//$res1=((float)$priced* (float)$dated);

$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
	
    $sql_u="select * from cardetails where `carid`=$abc";
    		 $res_u=mysqli_query($link,$sql_u) or die('error getting data');
    		 if($row=mysqli_fetch_array($res_u,MYSQLI_ASSOC))
    		 {
    		 	$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');

    		 	$res="update cardetails set `fromd`=$abcd ,`tod`=$efgh,`availability`='no' ,`hiredtimes`=hiredtimes+1 where `carid`=$abc";
    		     $execres=mysqli_query($link,$res) or die('error getting data');
    		  echo "<table width='200'  cellspacing='1'>";
    		  echo "<tr><td>";
    		  echo "CarNumber: </td><td>";
    		 echo $row['carnumber'] ;
    		 echo "</td></tr><tr><td>CarName:</td><td>";
		     echo $row['carname'] ;
    		 echo "</td></tr><tr><td>Color:</td><td>";
    		 echo $row['carcolor'] ;
             echo "</td></tr><tr><td>From:</td><td>";
             echo $abcd ;
             echo "</td></tr><tr><td>To:</td><td>";
             echo $efgh ;
    		 echo "</td></tr><tr><td>PricePerDay:</td><td>";
             echo $row['price'] ;

    		 echo "</table>";

		
			}
    
	
    else
	echo"error";




?>



<center>

    <a type="button" style="align:center" onclick="window.location.href='page2user.php'">OK</a>

</center>
</body>
</div>

</html>
