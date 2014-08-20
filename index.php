<?php
	function get_client_ip() {
	    $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	function curPageURL() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
	}

?>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Error 404</h1>
<p>Page Not Found</p>
<p>
<div id="date"></div>
<script>
	document.getElementById("date").innerHTML=(new Date()).toUTCString();
</script>
<?php  
	echo get_client_ip();
?>
 tried to load
<?php
	echo curPageURL();
?><br>
<div id="userAgent"></div>
<script>
	document.getElementById("userAgent").innerHTML=navigator.userAgent;
</script>
<h2 id="m1"></h2>
<h1 id="m2"></h1>
<p><span id="m3"></span> <span id="m4"></span></p>
<p id="m5"></p>

<script>
	setTimeout(function(){
		document.getElementById("m1").innerHTML="Oh, wait...";
	},3000);
	setTimeout(function(){
		document.getElementById("m2").innerHTML="WAIT!!!!";
	},4000);
	setTimeout(function(){
		document.getElementById("m3").innerHTML="We found the page!";
	},6000);
	setTimeout(function(){
		document.getElementById("m4").innerHTML="Yaaaaaaaaay!";
	},7000);
	setTimeout(function(){
		document.getElementById("m5").innerHTML="Redirecting...";
	},8500);
	setTimeout(function(){
		window.location.href="index_real.html"
	},10000);
</script>
</p>
</body>
</html>