<?php
require_once("lib/common.php");
$header = file_get_contents("include/header.html");
$header = highlightNav($header);
echo $header;
sendIEHeader();
?>
		<div class="container theme-showcase" role="main">
			<p class="well">
				&ldquo;It is the supreme art of the teacher to awaken joy in creative expression and knowledge.&rdquo;<br />
				&mdash;Albert Einstein
			</p>
			<article>
				<div class="page-header">
					<h1>Teaching</h1>
				</div>
				<p>
					I have been teaching in some capacity since 2004. Computer science has been my craft all my life. A craft is only as good as its practitioners. And the better the pracitioners, the better the craft. My purpose in life is to improve the craft, one student at a time.
				</p>
				<p>
					My teaching technique is an honest look at the challenges we all face in this rigorious field: persevere, make mistakes, and learn from the difficulties even senior software developers face. It is based on fostering pragmatic, steadfast, and thorough problem solvers &mdash; rather than people who simply know how to type code.
				</p>
			</article>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>
