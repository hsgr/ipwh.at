<?php

#header('Location: http://ipwh.at/');

if ( isset ( $_GET['tr'] ) ) {
	header('Content-Type: application/javascript;charset=utf-8');

	$cmd = "traceroute " . $_SERVER["REMOTE_ADDR"];
	$output = shell_exec ( $cmd );
	$result = explode ("\n", $output );
	$res = preg_grep('/.* \* \* \*/', $result );
	$rdiff = array_diff ( $result, $res );

	echo $_GET['tr'] ."(" . json_encode ( $rdiff ) . ")" ;

} elseif ( isset ( $_GET['ping'] ) ) {
	header('Content-Type: application/javascript;charset=utf-8');

	$cmd = "ping -c 5 -nq " . $_SERVER["REMOTE_ADDR"] ; 
	$output = shell_exec( $cmd );
	$result = explode ("\n", $output );

	echo $_GET['ping'] ."(" . json_encode ( $result ) . ")" ;

} elseif ( isset ( $_GET['whois'] ) ) {
	header('Content-Type: application/javascript;charset=utf-8');

	$cmd = "whois -s " . $_SERVER["REMOTE_ADDR"] ; 
	$output = shell_exec( $cmd );
	$result = explode ("\n", $output );

	echo $_GET['whois'] ."(" . json_encode ( $result ) . ")" ;


} else {
	header('Location: http://ipwh.at/');
}

?>
