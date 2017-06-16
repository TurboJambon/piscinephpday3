<?php
$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if ($username == "zaz" && $password == "jaimelespetitsponeys")
{
	header('Content-Type: text/html');
	echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,";
	print(base64_encode(file_get_contents("../img/42.png")));
	echo "'>\n</body></html>\n";
}
else
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('HTTP/1.0 401 Unauthorized');
	header('Content-Type: text/html');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
?>