<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php include "head_links.php";?>

	<title>Brooke Axtell</title>
</head>

<body id="index">
	<div id="container">
	<?php include "header.php";?>

	<article>
		<div class="HelloExquisiteCreature">
			<h1>Hello Exquisite Creature</h1>
			<h2>I am thrilled you are here<br />
				I know you have a fascinating story to tell...
			</h2>
		</div>
	</article>

	<article>
		<div class="Introduction">
			<p>As a Creative Writing Coach, I also know trying to express your unique voice can feel overwhelming. 
				It may even awaken your fear of not being valued and accepted for who you are. 
				If you have a message to share and don’t know how to find the words, I am here to guide you.
			</p>

			<p>When you release your true voice, you experience the freedom, inspiration and passion that only comes from
				living your creative calling. You discover self-expression is more powerful than fear
			</p>

			<p>
			<span class="BlueLink" id="onclick">I am here to help</span>


			</p>
		</div>
	</article>


</div>
	<?php include "footer.php" ?>
	<?php include "javascript_imports.php" ?>
	<script src="/js/jquery-popup-form/jquery_popup.js"></script>
	<script type="text/javascript">
/*
	$( document ).ready(function() {

		$("#contact-form").submit(function(){
			var formData = $(this).serialize();

			$.ajax({
				type: "POST",
				url: "contact.php",
				data: formData,
				context: document.body,
				success: function(){
					//successful

				},
				error: function(XMLHttpRequest, textStatus, errorThrown) { 
					//fail!
					//console.log("Status: " + textStatus); 
					//console.log("Error: " + errorThrown); 
				}     
			});
			return false;
		});

	});
*/
	</script>
</body>
	<div id="contactdiv">
			<fieldset class="form" id="contact_form">
				<img src="images/button_cancel.png" class="img" id="cancel"/>

					<div id="result"></div>
						<h3>Contact Form</h3>
						<label for="name"><span>Name</span>
						<input type="text" name="name" id="name" placeholder="Enter Your Name" />
						</label>
						
						<label for="email"><span>Email Address</span>
						<input type="email" name="email" id="email" placeholder="Enter Your Email" />
						</label>
						
						<label for="phone"><span>Phone</span>
						<input type="text" name="phone" id="phone" placeholder="Phone Number" />
						</label>
						
						<label for="message"><span>Message</span>
						<textarea name="message" id="message" placeholder="Enter Your Name"></textarea>
						</label>
						
						<label><span>&nbsp;</span>
						<button class="submit_btn" id="submit_btn">Submit</button>

						</label>
						
				</fieldset>
	</div>
</html>
