<?php
$fileName = 'contact';
require_once '../header.php';
?>
	<section class="contact-container">
		<div class="contact-container-inner">
			<h4>Report any incorrect information or recommend a datatable to add.</h4>
            <br>
			<p>
				Please provide your name, email address and message with details. Please do not solicit or spam.
			</p>
    		<br>
			<form class="contact-form" role="form" method="post" action="mail/mail.php" enctype="application/x-www-form-urlencoded">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-primary" name="send">Submit</button>
				</div>
			</form>
		</div>
	</section>

<?php require_once '../footer.php'; ?>
