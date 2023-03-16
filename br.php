<?php

$addr = 'https://google.com';
if (isset($_GET['addr'])) {
  $addr = $_GET['addr'];
}

$raw_html = file_get_contents($addr);
$html = str_ireplace("<head>", '<head><base href="'.$addr.'">', $raw_html);

$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$pattern = '/(<a[^>]*href=")([^"]*)("[^>]*>)/mi';
$replacement = '$1'.$actual_link.'?addr=$2$3';

echo preg_replace($pattern, $replacement, $html);

?>
