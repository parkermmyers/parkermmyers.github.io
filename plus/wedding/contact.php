<html> 
	<body> 
		<?php 
			$name = $_POST['name']; 
			$guests = $_POST['guests']; 
			$meal = $_POST['meal']; 

			$to = "emilyplusparker@gmail.com"; 
	
			$subject = "Contact Form Message"; 

				$msg .= "Name: " . $guests . "\r\n" ; 
				$msg .= "Message: " . $name ; 
		
		mail($to, $subject, $msg); 
		echo ("Thank you! We will respond as quickly as possible. Click <a href=\"index.html\">here</a> to return to the wedding page!"); 
		?> 
	</body> 
</html>