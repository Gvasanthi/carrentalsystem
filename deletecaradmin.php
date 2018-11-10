<html>
<body>
	<h1 align="center" style="color: orange">Select The  Car To Be Deleted</h1>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>carname</th>
<th>carnumber</th>
<th>carmodel</th>
<th>car-id</th>
<th>Delete</th>
</tr>

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
    $sql_u="Select * from cardetails where carname not in (select carname from cardetails where carname='select')";
	
    $res_u=mysqli_query($link,$sql_u);

while ($rep=mysqli_fetch_assoc($res_u))
{
	
	
	echo "<td>".$rep['carname']."</td>";
	echo "<td>".$rep['carnumber']."</td>";
	echo "<td>".$rep['model']."</td>";
	echo "<td>".$rep['carid']."</td>";
	echo "<td> <a href=delete.php?carid=".$rep['carid'].">Delete</a></td>";

	
	echo "</tr>";
}
?>
</table>
<br>
<br>
<center>
<div class="abc">
<input type="button" style="color:white;background-color:orange;height:20 ;width:100;border-radius:20px;padding:20px" value="back" onclick="window.location.href='page2admin.php'"/>

</div>
</center>
</body>
</html>
<style type="text/css">

 
	table,th,td{
		width:80%;
		margin: auto;
		border: 1px solid white;
		border-collapse: collapse;
		text-align: center;
		font-size: 20px;
		table-layout: fixed;
		background: gray;
		opacity: 0.9;
		color: white;
		margin-top: 100px;
		
		
	}
	th
	{
		border-width: 1px;
		padding:8px;
		border-style: solid;
		border-color: #666666;
		background:orange;
		text-align:left;
		opacity: 0.9;
	}
		
	
		body
{
	
	background-image:url('easygo.jpg');
        background-size: cover;
	background-position: center;
	font-family:sans-serif;


}
</style>