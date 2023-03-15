<?php

$raw_html = file_get_contents("https://churchofjesuschrist.org");
$html = str_ireplace("<head>", "<head><base href=\"https://churchofjesuschrist.org\">", $raw_html);

echo($html);

?>
