<?php
require_once("lib/common.php");
$header = file_get_contents("include/header.html");
$header = highlightNav($header);
echo $header;
sendIEHeader();
?>
	<iframe id="resume-frame" src="/resume/" seamless></iframe>
	<p>A <a href="resume/resume.pdf">PDF version</a> of my resume is also available.</p>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>