<?php
	$eml = $_POST['eml'];
	$to = "chandrakanta@hexcodetechnologies.com, ckanta.sen@gmail.com, <?php echo $eml; ?>";
	$subject = "HTML email";
	
	
	//Add the message header
    $message = file_get_contents( 'email-templates/email-header.php' );
    
    //Add the message body
    $message .= file_get_contents( 'email-templates/email-body.php' );
    $message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<p>This email contains HTML Tags!</p>
	<table>
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	</tr>
	<tr>
	<td>John</td>
	<td>Doe</td>
	</tr>
	</table>
	</body>
	</html>
	";
    //Add the message footer content
    $message .= file_get_contents( 'email-templates/email-footer.php' );
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";
	
	mail($to,$subject,$message,$headers);
?>