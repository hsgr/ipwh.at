<?php
header('Content-Type: application/javascript;charset=utf-8');

$output = shell_exec ( "traceroute " . $_SERVER["REMOTE_ADDR"] );
$result = explode ("\n", $output );
$res = preg_grep('/.* \* \* \*/', $result );
$rdiff = array_diff ( $result, $res );

echo "callback(" . json_encode ( $rdiff ) . ");";
?>
