/*
 * Project: Rpibox
 * Created by: Jitesh Saini
*/

function button_action(val)
{
	
	document.getElementById("disp_local_dir").innerHTML=val;
	
		button_caption=document.getElementById(val).value;
		
		if(button_caption=="OFF"){
			document.getElementById(val).value="ON";
			document.getElementById(val).style.backgroundColor="green";
			//alert("hi");
			write_ajax(val,0);
		}
		if(button_caption=="ON"){
			document.getElementById(val).value="OFF";
			document.getElementById(val).style.backgroundColor="red";
			write_ajax(val,1);
		}
			
}
function write_ajax(val,state)
{
	$.post("ajax_control_gpio.php",
    {
      pin: val,
      state: state
    },
    function(data,status){
   	 document.getElementById("disp_server").innerHTML = data;
    });

}

