<html>
<head>

	<style type="text/css">
	body
{
	margin:0;
 	padding:0;
	background-image:url('easygo.jpg');
        background-size: cover;
	background-position: center;
	font-family:sans-serif;


}
	.style1 select
	{
		
		width: 268px;
		padding :5px;
		font-size: 16px;
		color:orange;
		line-height: 1;
		border:5;
		border-radius: 10px;
		height: 34px;
		
	}
	

 
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
		
	


</style>
</head>
<body>
	<h1 style="color: orange;"> Enter the selection criteria for car</h1>
	<form name="form1" method="post" action="searchcar.php">
		
		
		
		<input type="hidden" name="submitted" value="true" />
		<div class="style1">
		<select name="criteria1">
			<?php
				$user='root';
                $pass='';
                 $db= 'car';
                 $link="";
                 $res="";
                 $row="";
                 $sql_u="";
                 $criteria1="";
                 $link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
                 mysqli_select_db($link,"dropdown");
                 $sql_u="select distinct(`carname`) from cardetails where `availability`='yes'";
				 $res_u=mysqli_query($link,$sql_u) or die('error getting data');
                 while($row=mysqli_fetch_array($res_u))
                 {
                 	?>
                 	<option><?php echo $row["carname"] ;?></option>
                 	<?php 
                 }


			?>
		</select>
	</div>
	<br>
	<br>
	
		
		<p>
		<label style="color:white"><font size=3"><b>Enter Start-Date</b></font><input type="date"  style="height:25;width=55;border-radius:10px;" name="criteria3" /></label>
	</p>
	<br>
	
		<p><label style="color:white"><font size=3"><b>Enter To-Date  </b></font><input type="date" style="height:25;width=55;border-radius:10px;" name="criteria4" /></label></p>

		<br>
		

		<input type="submit" style="color:orange;background-color:white;height:5 ;width:100;border-radius:20px;padding:20px"/>
		<input type="reset" value="cancel" style="color:orange;background-color:white;height:20 ;width:100;border-radius:20px;padding:20px" onclick="window.location.href='page2user.php'" />
		<br>
		
	
</form>
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
$rep="";
$diff="";
$diff1="";
$datef="";
$datet="";
$cur="";

		if(isset($_POST['submitted']))
		{
			
			$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');

			$criteria1=$_POST['criteria1'];
			//$criteria2=$_POST['criteria2'];
			$criteria3=$_POST['criteria3'];
			$criteria4=$_POST['criteria4'];

			$datef=strtotime($criteria3);
			$datet=strtotime($criteria4);
			$diff=$datet-$datef;
			$diff1=floor($diff/(60*60*24));

			if($diff>0)
			//price='".$row['price']."
			{
				//$sql_u="select sysdate into $cur from dual";
				//$res_u=mysqli_query($link,$sql_u);
				$cur=date("Y-m-d");

				if($criteria3>$cur)

				{

		 $sql_u="select * from cardetails where carname='$criteria1'  and availability='yes'";
		 $res_u=mysqli_query($link,$sql_u) or die('error getting data');
		 if(mysqli_num_rows($res_u)>0)
		 {
		 echo "<table>";
		 echo "<tr> <th>CarName</th><th>CarColor</th><th>PricePerDay</th><th>select</th></tr>";
		 while ($row=mysqli_fetch_array($res_u,MYSQLI_ASSOC)) {

		 	echo "<tr><td>";
		 	echo $row['carname'];
		 	echo "</td><td>";
		 	echo $row['carcolor'];
		 	echo "</td><td>";
		 	echo $row['price'];
		 	echo "</td>";
		 	echo"<td> <a href=trial1.php?carid='".$row['carid']."'&car1='".$criteria3."'&car2='".$criteria4."'&time1='".$diff1."'&price='".$row['price']."'&number='".$row['carnumber']."'>select</a></td></tr>";

		 	$link=mysqli_connect('localhost',$user,$pass,$db) or die('Error');
			

		 }

		 echo "</table>";
		}
	}
	else

	header('location:trial5.php');


	}
	else

	header('location:trial5.php');
		
		
	}

	?>
</body>
</html>
