<?php
require_once("lib/xsrf.php");
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
setXsrfCookie();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<base href="/" />

		<!-- Google Fonts: Didact Gothic -->
		<link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" type="text/css">

		<title>Deep Dive Dylan</title>
	</head>
	<body>
		<deepdivedylan-app>Loading&hellip;</deepdivedylan-app>
	</body>
</html>
