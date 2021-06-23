<!DOCTYPE html >
<html>
<head>
<title>Degrees values</title>
<link rel="stylesheet" href="tablsty.css">
</head>
<body>
<?php  
 $con = mysqli_connect("localhost","root","","rop_arm");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  
$list= ("select * from interface");
$list_rs= mysqli_query($con,$list);	

				
	if ($list_rs == true ){    ?>
     
      <table class="tab">
       <tr>
	   <td>motor1</td>
	   <td>motor2</td>
       <td>motor3</td>
       <td>motor4</td>
       <td>motor5</td>
	   <td>motor6</td> 
       </tr>
       <?php

				while($list_info= mysqli_fetch_object ($list_rs))
				{

					print"<tr>"; 
					print"<td>".$list_info->motor1."</td>";
					print"<td>".$list_info->motor2."</td>";
					print"<td>".$list_info->motor3."</td>";
					print"<td>".$list_info->motor4."</td>";
					print"<td>".$list_info->motor5."</td>";
					print"<td>".$list_info->motor6."</td>";
					print"</tr>";}?>
  
      </table>
      <p>
<?php	
}
else
{
	echo "<h2>No Records Found...</h2>";
}
?>
</body>
</html>