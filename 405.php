<?php
header("HTTP/1.0 405 Well this is unexpected");
var_dump(http_response_code());
?>