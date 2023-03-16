<?php

$addr = $_GET['addr'] || 'https://google.com';

$raw_html = file_get_contents($addr);
$html = str_ireplace("<head>", '<head><base href="'.$addr.'">', $raw_html);

echo($html);

?>
