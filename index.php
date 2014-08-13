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
				<a href="services.html"><span class="BlueLink">I am here to help</span></a>


			</p>
		</div>
	</article>


</div>
	<?php include "footer.php" ?>
	<?php include "javascript_imports.php" ?>

	<script type="text/javascript">

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

	</script>
</body>
</html>
