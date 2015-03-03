<?php
require_once("lib/common.php");
$header = file_get_contents("include/header.html");
$header = highlightNav($header);
echo $header;
sendIEHeader();
?>
		<div class="container theme-showcase" role="main">
			<p class="well">
				&ldquo;I hope we will use the Net to cross barriers and connect cultures.&rdquo;<br />
				&mdash;Tim Berners-Lee
			</p>
			<article>
				<div class="page-header">
					<h1>Advocacy</h1>
				</div>
				<img src="images/legacy-ip-only.svg" alt="IPv4 only" class="floatImage" />
				<h2>IPv6</h2>
				<p>
					I have always been an early adopter and advocate of IPv6. The sooner we all transition from legacy IPv4 to IPv6, the faster and smoother the internet will operate. Excuses to stay with IPv4 are running out faster than IPv4 addresses themselves! IPv6 is easy to deploy and program.
				</p>
				<p>
					I have deployed dual stacked IPv4/IPv6 mail and web services for my main domain, as well as integrated IPv6 awareness in the main curriculum at <a href="http://www.deepdivecoders.com/">Deep Dive Coders</a>.
				</p>
				<h2>Net Neutrality</h2>
				<p>
					The internet was designed as an equal playing field for all involved. Letting other players decide which traffic has priority over which cuts at the very fabric the internet is woven with. A free, transparent, and open internet is the only way to ensure the well being of the internet we have all come to enjoy these past decades.
				</p>
			</article>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>
