<!DOCTYPE html >
<html>
<head>
<title>User interface</title>
<link rel="stylesheet" href="slider.css">
</head>
<body>
<?php
 $web= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['Save'])){
                        $motor1=$_POST['motor1'];
                        $motor2=$_POST['motor2'];
                        $motor3=$_POST['motor3'];
                        $motor4=$_POST['motor4'];
                        $motor5=$_POST['motor5'];
						$motor6=$_POST['motor6'];
$msq = "UPDATE interface SET  motor1 = '$motor1', motor2 = '$motor2', motor3='$motor3', motor4='$motor4', motor5='$motor5', motor6='$motor6'";
$tech = mysqli_query($web,$msq);
           if($tech){echo '<script type="text/javascript"> alert("Motors Degrees Updated successfully.")</script>';
 header("Refresh: 1;url=Deg_value.php");}
           else{echo '<script type="text/javascript"> alert("Could not update Records!")</script>';
header("Refresh: 1;url= index.php");}}
mysqli_close($web);}?>

<?php
 $pow= mysqli_connect("localhost","root","","rop_arm");
      if (mysqli_connect_errno()){
printf("Connect failed: %s\n", mysqli_connect_error()); exit();}
      else {
           if (isset($_POST['power'])){
                        $power=$_POST['power'];
$po = "SELECT * from power WHERE power='$power'";
$pwe = mysqli_query($pow,$po);  
         if($pwe){echo '<script type="text/javascript"> alert("POWER ON.")</script>';
 header("Refresh: 0.5;url=run.php");}}
mysqli_close($pow);}?>
 <div class="container">
  <div class="slider">
    <div class="show-value"></div>
    <form action= "index.php" method="POST" name="form">
    <input type="range" name="motor1" id="motor1" min="0" max="180" value="90">
	   <p>motor1:&nbsp<span id="value"></span></p>
    <input type="range" name="motor2" id="motor2" min="0" max="180" value="90">
	   <p>motor2:&nbsp<span id="value1"></span></p>
    <input type="range" name="motor3" id="motor3" min="0" max="180" value="90">
	   <p>motor3:&nbsp<span id="value2"></span></p>
    <input type="range" name="motor4" id="motor4" min="0" max="180" value="90">
	   <p>motor4:&nbsp<span id="value3"></span></p>
    <input type="range" name="motor5" id="motor5" min="0" max="180" value="90">
	   <p>motor5:&nbsp<span id="value4"></span></p>
    <input type="range" name="motor6" id="motor6" min="0" max="180" value="0">
	   <p>motor6:&nbsp<span id="value5"></span></p>
 </div> 
   </div>
   <input type="submit" class="but" value="Save" name="Save"><br>
   <input type="submit" class="btn" value="Run" name="power" id="power">
   </form> 
   </body>
<script>
var slider= document.getElementById("motor1");
var output= document.getElementById("value");
var slider2= document.getElementById("motor2");
var output2= document.getElementById("value1");
var slider3= document.getElementById("motor3");
var output3= document.getElementById("value2");
var slider4= document.getElementById("motor4");
var output4= document.getElementById("value3");
var slider5= document.getElementById("motor5");
var output5= document.getElementById("value4");
var slider6= document.getElementById("motor6");
var output6= document.getElementById("value5");
output.innerHTML= slider.value;
slider.oninput= function(){
	output.innerHTML = this.value;
}
output2.innerHTML= slider2.value;
slider2.oninput= function(){
	output2.innerHTML = this.value;
}
output3.innerHTML= slider3.value;
slider3.oninput= function(){
	output3.innerHTML = this.value;
}
output4.innerHTML= slider4.value;
slider4.oninput= function(){
	output4.innerHTML = this.value;
}
output5.innerHTML= slider5.value;
slider5.oninput= function(){
	output5.innerHTML = this.value;
}
output6.innerHTML= slider6.value;
slider6.oninput= function(){
	output6.innerHTML = this.value;
}
</script>
</html>