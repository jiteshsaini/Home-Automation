<!--
Project: Rpibox
Created by: Jitesh Saini
-->
<html>
<head>        
   <title>Control Panel</title>  
   <link href="css/cp.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>  
   <script src="js/gpio.js"></script>              
</head> 

<body>
<?php

 $pin1 = 8;
 $pin2 = 11;
 $pin3 = 14;
 $pin4 = 15;
 $pin5 = 23;
 $pin6 = 24;
 $pin7 = 20;
 $pin8 = 21;
 
 system("gpio -g mode $pin1 out");system("gpio -g write $pin1 1");
 system("gpio -g mode $pin2 out");system("gpio -g write $pin2 1");
 system("gpio -g mode $pin3 out");system("gpio -g write $pin3 1");
 system("gpio -g mode $pin4 out");system("gpio -g write $pin4 1");
 system("gpio -g mode $pin5 out");system("gpio -g write $pin5 1");
 system("gpio -g mode $pin6 out");system("gpio -g write $pin6 1");
 system("gpio -g mode $pin7 out");system("gpio -g write $pin7 1");
 system("gpio -g mode $pin8 out");system("gpio -g write $pin8 1");
 
echo"<div align='center' class='box_outer'>";//========================================================================================== -->
	echo"<div>
			<img style='float:left' src='img/rpibox.jpg' alt='Smiley face' height='100px' width='200px'>
			<img style='margin-left:1px' src='img/wifi.jpg' alt='Smiley face' height='100px'>
			<img style='float:right' src='img/bulb.jpeg' alt='Smiley face' height='100px'>
			
		</div>";
	echo"<div align='center' class='box_1'>";
		echo"
			<input id='$pin1' class='button' type='submit' onclick= button_action($pin1) value='OFF'/>
			<input id='$pin2' class='button' type='submit' onclick= button_action('$pin2'); value='OFF'/>
			<input id='$pin3' class='button' type='submit' onclick= button_action('$pin3'); value='OFF'/>
			<input id='$pin4' class='button' type='submit' onclick= button_action('$pin4'); value='OFF'/>
			<input id='$pin5' class='button' type='submit' onclick= button_action('$pin5'); value='OFF'/>
			<input id='$pin6' class='button' type='submit' onclick= button_action('$pin6'); value='OFF'/>
			<input id='$pin7' class='button' type='submit' onclick= button_action('$pin7'); value='OFF'/>
			<input id='$pin8' class='button' type='submit' onclick= button_action('$pin8'); value='OFF'/>
		";
	echo"</div>";
	
	echo"
	<p  style='color:green;display:none' id='disp_local_dir'>sent to server</p>
	<p  style='color:red;display:none' id='disp_server'>Response from server</p>
	";
	
echo"</div>";//========================================================================================== -->
	
	

?>
</body>
</html>
