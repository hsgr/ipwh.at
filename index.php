<html>
<head>
	<meta charset="utf-8" />
	<title>ipwh.at</title>

	<link href="css/ip.css" rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="container">
		<div id="header">
			ipwh.at
		</div>
		
		<div id="ip" >
			<?php echo $_SERVER["REMOTE_ADDR"] ."<br>" . gethostbyaddr( $_SERVER['REMOTE_ADDR'] ) ;?>
		</div>
		
		<div id="footer">
			<hr>
			Open Web App to display your IP and Hostname
			<br>by <a href="http://ebalaskas.gr/">Ebal</a>
			 - <a href="https://github.com/hsgr/ipwh.at">Fork me on Github</a>
			 - <a href="#" id="install_app">Click here to install</a>
		</div>
	</div>

</body>

<script type="text/javascript" src="js/install.js"></script>

</html>