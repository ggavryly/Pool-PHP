<?php
	if ($_SERVER['PHP_AUTH_USER'] !== "zaz" && $_SERVER['PHP_AUTH_PW'] !== "jaimelespetitsponeys")
	{
		header("WWW-Authenticate: Basic realm=''Member area''");
        header("HTTP/1.0 401 Unauthorized");
        echo "<html><body>That area is accessible for members only</html>\n";
	}
	else if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys")
	{
		echo "<html><body>Hello zaz<br><img src=data:image/png;base64,".base64_encode(file_get_contents("../img/42.png"))."></body></html";
	}
?>