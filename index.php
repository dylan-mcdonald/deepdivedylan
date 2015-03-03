<?php
require_once("lib/common.php");
$header = file_get_contents("include/header.html");
$header = highlightNav($header);
echo $header;
sendIEHeader();
?>
		<div class="container theme-showcase" role="main">
			<!-- Main jumbotron for a primary marketing message or call to action -->
			<header class="jumbotron">
				<img src="images/dylan.jpg" height="256" width="256" alt="" class="floatImage" />
				<h1>Dylan McDonald</h1>
				<p>Computer scientist, teacher, free thinker, lover of green chile, &amp; the universe around me&hellip;</p>
				<p><a href="contact.php" class="btn btn-primary btn-lg" role="button">Get In Touch &raquo;</a></p>
			</header>

			<article>
				<div class="page-header">
					<h1>Welcome</h1>
				</div>
				<p>
					Welcome all seekers to my site! This site is a staging ground for my further development in frontend and backend development, as well as a place to integrate and demonstrate my coding and teaching practices.
				</p>
			</article>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>
