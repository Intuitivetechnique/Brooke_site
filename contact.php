<?php

	$name=$_POST["name"];
	
	$from = 'From: test.com'; 
    $to = 'edgar.serventek@gmail.com'; 
    $subject = 'New Sign Up!';

    $body = "From: $name ";
	

		
    if (mail ($to, $subject, $body, $from)) { 
        print '<p>Your message has been sent!</p>';
    } else { 
        error_log("something is wrong");
    }
	 


?>