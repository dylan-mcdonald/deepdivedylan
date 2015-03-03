<?php
require_once("encrypted-config.php");
require_once("recaptchalib.php");

function highlightNav($header)
{
	$highlight = " class=\"active\"";
	$navStart  = "<ul class=\"nav navbar-nav\">";
	$path	  = explode("/", $_SERVER["PHP_SELF"]);
	$pageName  = end($path);

	if($pageName === "index.php")
	{
		$pageName = "\.";
	}

	$header = preg_replace("/<(li)>(<a href=\"$pageName\">)/", "<$1 class=\"active\">$2", $header);
	return($header);
}

function sendIEHeader()
{
	if(isset($_SERVER['HTTP_USER_AGENT']) &&
	(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
	{
		header("X-UA-Compatible: IE=edge");
	}
}

function twitterFeed()
{
	$twitterCode = <<< EOF
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/deepdivedylan" data-widget-id="494497143038541827">Tweets by @deepdivedylan</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
EOF;
	return($twitterCode);
}

function verifyCaptcha($challengeField, $responseField)
{
	$config   = readConfig("/etc/apache2/deepdivedylan.ini");
	$response = recaptcha_check_answer($config["captchaKey"], $_SERVER["REMOTE_ADDR"], $challengeField, $responseField);

	if($response->is_valid)
	{
		return(true);
	}
	else
	{
		return(false);
	}
}
?>
