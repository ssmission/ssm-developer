<?php

$addr = 'https://google.com';
if (isset($_GET['addr'])) {
  $addr = $_GET['addr'];
}

$raw_html = file_get_contents($addr);
$html = str_ireplace("<head>", '<head><base href="'.$addr.'">', $raw_html);

echo($html);

?>
