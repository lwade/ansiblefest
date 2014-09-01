<HEAD>
<TITLE>Welcome to the httpd demo page</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<CENTER>
<H1>Test web page...</H1>

<?php
$IP = $_SERVER['SERVER_ADDR']; // Get IP
echo "The private IP of this instance is: <strong>$IP</strong>";
?>
