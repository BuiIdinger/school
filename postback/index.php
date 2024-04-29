<?php
http_response_code(405);
header("Connection: close");
header("Content-Length: 0");
header("Content-Type: text/plain");
echo "Method Not Allowed";
?>