<?php
$output = shell_exec ( "traceroute " . $_SERVER["REMOTE_ADDR"] );
$result = explode ("\n", $output );
$res = preg_grep('/.* \* \* \*/', $result );
$rdiff = array_diff ( $result, $res );

echo json_encode ( $rdiff );
?>
