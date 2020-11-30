<html> 
	<body> 
		<?php 
			$name = $_POST['name']; 
			$guests = $_POST['guests']; 
			$meal = $_POST['meal']; 
			$comment = $_POST['comment']; 

			$to = "emilyplusparker@gmail.com"; 
	
			$subject = "RSVP Notification!"; 

				$msg .= $name . " has responded to your invitation!" . "\r\n"; 
				$msg .= "Response: " . $guests . "\r\n"; 
				$msg .= "Guests: " . $meal . "\r\n"; 
				$msg .= "Comment: " . $comment . "\r\n"; 				
		
		mail($to, $subject, $msg); 
		echo ("Thank you for your response! Click <a href=\"index.html\">here</a> to return to the wedding page!"); 
		?> 
	</body> 
</html>