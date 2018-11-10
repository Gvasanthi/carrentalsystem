<label style="color:orange"><font size=3"><b>Carname:</b></font><input type="text"  style="height:25;width=55;border-radius:10px;" name="criteria1" /></label>
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
    $sql_u="Select * from cardetails";
	
    $res_u=mysqli_query($link,$sql_u);

while ($rep=mysqli_fetch_assoc($res_u))
{
	echo "<tr>";
	
	echo "<td>".$rep['carname']."</td>";
	echo "<td>".$rep['carnumber']."</td>";
	echo "<td>".$rep['model']."</td>";
	
	echo "</tr>";
}
?>
</table>
