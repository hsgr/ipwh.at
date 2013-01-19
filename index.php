<html>
<head>
	<meta charset="utf-8" />
	<title>ipwh.at</title>

	<link href="css/ip.css" rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.js"></script>
</head>

<body>

	<div id="container">
		<div id="header">
			ipwh.at
		</div>
		
		<div id="whoami">
			<span id="ip"><?php echo $_SERVER["REMOTE_ADDR"] ;?></span>
			<br>
			<span id="hostname"><?php echo gethostbyaddr( $_SERVER['REMOTE_ADDR'] ) ;?></span>
		</div>

		<div id="trace">
			Tracing you from our server...
		</div>
		
		<div id="footer">
			<hr>
			Open Web App to display your IP and Hostname
			by <a href="http://ebalaskas.gr/">Ebal</a>
			 - <a href="https://github.com/hsgr/ipwh.at">Fork me on Github</a>
			 - <a href="#" id="install_app">Click here to install</a>
		</div>
	</div>

</body>

<script type="text/javascript" src="js/install.js"></script>

</html>