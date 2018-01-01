<?php 
  
	if($_POST) {
  
	    // Enter the email where you want to receive notification
		
		$emailTo = 'dangdungcntt@gmail.com';
    
          // DON'T EDIT BELOW CODE

    	$subscriber_email = ($_POST['email']);
      
		    // Send email code
			$subject = 'Bạn có một người đăng kí mới cho LShare.xyz';
			$message = "Bạn có một người đăng kí mới!\n\nEmail: " . $subscriber_email;
			$headers = "From: no-reply@LShare.xyz";
			
			mail($emailTo, $subject, $message, $headers);
      
     
		}
?>