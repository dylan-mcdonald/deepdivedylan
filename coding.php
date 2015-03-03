<?php
require_once("lib/common.php");
$header = file_get_contents("include/header.html");
$header = highlightNav($header);
echo $header;
sendIEHeader();
?>
			<div class="container theme-showcase" role="main">
				<p class="well">
					&ldquo;Machines take me by surprise with great frequency.&rdquo;<br />
					&mdash;Alan Turing
				</p>
				<article>
					<div class="page-header">
						<h1>Coding</h1>
					</div>
					<p>
						I have been coding for a little over 15 years and, in that time, have learned the importance of learning itself. A good coder learns. A great coder learns even more. This is a rich ecosystem where opportunities to learn, grow, and mess up abound. Great coders adapt and avail themselves of these enormous advantages.
					</p>
					<p>
						With the ubiquity of the web, secure coding has never been more important. The extra time invested in secure coding practices is well worth the effort. Protecting the client's data and interests is worth the upfront investment in ensuring information security, especially as the amount of time required to code securely in the first place has been declining in recent years.
					</p>
				</article>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>
