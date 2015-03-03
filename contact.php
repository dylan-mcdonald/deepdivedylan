<?php
require_once("lib/common.php");
$publicKey = "6Lc4yPcSAAAAABJmlN7DLNtNCLbmdx6AWOAniBFW";
$header	= file_get_contents("include/header.html");
$header	= highlightNav($header);
sendIEHeader();
echo $header;
?>
			<div class="container theme-showcase" role="main">
				<article>
					<div class="page-header">
						<h1>Contact</h1>
					</div>
					<p id="outputArea"></p>
					<form id="contactForm" method="post" action="lib/email.php">
						<p>
							<label for="name">Name</label><br />
							<input type="text" id="name" name="name" size="32" placeholder="Who may I say is calling?" />
						</p>
						<p>
							<label for="email">Email</label><br />
							<input type="email" id="email" name="email" size="32" placeholder="How may I reach you?" />
						</p>
						<p>
							<label for="subject">Subject</label><br />
							<input type="text" id="subject" name="subject" size="32" placeholder="What's this about?" />
						</p>
						<p>
							<label for="message">Message</label><br />
							<textarea id="message" name="message" cols="32" rows="8" placeholder="What's on your mind?"></textarea>
						</p>
						<p>
							<label>Are You Human?</label>
							<?php echo recaptcha_get_html($publicKey); ?>
						</p>
						<p>
							<label>Make Contact!</label><br />
							<button class="btn btn-primary" type="submit">Send</button>
							<button class="btn btn-primary" type="reset">Clear</button>
						</p>
					</form>
				</article>
<?php
$footer = file_get_contents("include/footer.html");
echo $footer;
?>

