<?php
//Javascript file:


?>

<!--jquery-->
<script src="jquery.js" ></script>
<!--jquery ui-->
<script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="jssor.slider.mini.js"></script>			
<script>
	
	$(document).ready(function() {
		
		$("#console-debug").hide();
		
		$("#btn-debug").click(function() {
			
			$("#console-debug").toggle();
			
		});
		
	});
	
	var ba = ["Chrome", "Firefox", "Safari", "MSIE", "Trident", "Edge"];
	var b, ua = navigator.userAgent;
	for(var i=0; i < ba.length; i++)
	{
		if(ua.indexOf(ba[i]) > -1)
		{
			b = ba[i];
			break;
		}
	}
	if(b == "MSIE" || b== "Trident" || b == "Edge")
	{
		b == "Internet Explorer";
	}
	//alert(b + " browser detected");
	
</script>
