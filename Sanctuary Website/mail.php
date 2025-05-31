<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Contact Form">
    <meta name="keywords" content="Contact Form">
    <link rel="stylesheet" href="styles/main.css">
    <title>Contact Form</title>
</head>

<body>
	    <h1>Email Confirmation</h1>
		<fieldset>
        	<legend>Contact Information</legend>
    		<label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        	<label for="email">Email Address:</label>
        	<input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        	<label for="verify">Verify Email:</label>
        	<input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    		<legend>Message Information</legend>
			<label for="message_date">Message Date:</label>
			<input type="date" name="message_date" id="message_date" value="<?php echo $_REQUEST['message_date'] ?>" disabled><br>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message:</label>
			<textarea id="message" name="message" rows="5" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
<h2 class="message-sent">
<?php
  if (isset($_REQUEST['email'])) {
    $admin_email = "zackwelch3236@gmail.com"; 
    $email = $_REQUEST['email'];  
    $message_date = $_REQUEST['message_date']; 
    $subject = $_REQUEST['subject']; 
    $message = $_REQUEST['message']; 
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; 
    $body .= "Message Date: " . $message_date . "\n"; 
    $body .= "Message: " . $message; 
    $headers = "From: " . $name . " <" . $email . "> \r\n"; 
    $headers .= "CC: " . $name . " <" . $email . ">";
    mail($admin_email, $subject, $body, $headers); 
    echo "Thank you for contacting us! Your message has been sent."; 
  }
  else  { 
     echo "There has been an error!";
        }
?>
</h2>
</body>
</html>
