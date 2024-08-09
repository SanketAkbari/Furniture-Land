<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Contact Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="dist/css/contact-us-css.css">
	</head>
	<body>
		<form class="contact" method="post" action="">
			<h1>Contact Form</h1>
			<div class="fields">
				<label for="email">
					<i class="fas fa-envelope"></i>
					<input id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">
					<i class="fas fa-user"></i>
					<input type="text" name="name" placeholder="Your Name" required>
				<label>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Message" required></textarea>
			</div>
			<input type="submit">
		</form>
	</body>
</html>