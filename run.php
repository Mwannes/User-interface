<!DOCTYPE html >
<html>
<head>
<title>Power</title>
<link rel="stylesheet" href="tablsty.css">
</head>
<body>
<?php  
 $on = mysqli_connect("localhost","root","","rop_arm");
if (!$on)
  {
  die('Could not connect: ' . mysqli_error());
  }
$opr= ("select * from power");
$work= mysqli_query($on,$opr);	
	if ($work == true ){ ?>
      <table class="run">
	   <td>power</td>
       <?php
				while($list_info= mysqli_fetch_object ($work))
				{
					print"<tr>"; 
					print"<td>".$list_info->power."</td>";
					print"</tr>";}?>
      </table>
      <?php	}
           else
             { echo "<h2>No Records Found...</h2>";}
        ?>
</body>
</html>