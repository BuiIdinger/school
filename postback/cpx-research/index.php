<?php
$allowed_ips = array("188.40.3.73", "2a01:4f8:d0a:30ff::2", "157.90.97.92");
$client_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($client_ip, $allowed_ips)) {
    echo("cpx-research-postback");
} else {
    http_response_code(405);
    header("Connection: close");
    header("Content-Length: 0");
    header("Content-Type: text/plain");
    echo "Method Not Allowed";
}
?>