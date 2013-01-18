<html> 
<head>
  <meta charset="utf-8" />
  <title>What Is My IP</title>

<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
<link href="css/ip.css" rel='stylesheet' type='text/css'>

</head>
<body>

<div id="ip" >
<?php
	echo $_SERVER["REMOTE_ADDR"] ."<br>" . gethostbyaddr( $_SERVER['REMOTE_ADDR'] ) ;
?>
</div>

<p align=right>Click here to <a href="#" id="install_app"> <b> install </b></a></p>

</body>

<script language="JavaScript" type="text/javascript" src="js/install.js"> </script>

</html>
