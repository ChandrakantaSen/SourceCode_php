<!--
	Conceptualized by: Hexcode Technologies Private Limited 
 Url: www.hexcodetechnologies.com 			 
 Address: DN-47, First Floor, Sector - V, Salt Lake, Kolkata - 700 091 
 Contact No.: (033) 4007-0991, (033) 4068-1121 						 
 E-mail Us: help@hexcodetechnologies.com								 
-->
<?php
/* subject and email varialbles*/

$emailSbuject = 'New Client Request';
$webMaster = 'info@kahinihoteldigha.com';
$emailSbuject2 = 'Thank you for contacting Kahini Hotel';
$client = ' $emailFeild\r\n';
/*gathering data variables*/


$nameFeild = $_POST['name'];
$emailFeild = $_POST['email'];
$phoneFeild = $_POST['phone'];
$subjectFeild = $_POST['subject'];
$commentsFeild = $_POST['comments'];

// admin message body
$body= <<<EOD
Contact details of : $nameFeild

Name : $nameFeild \n
Email : $emailFeild \n
Contact : $phoneFeild \n
Subject : $subjectFeild \n
Client's Message : $commentsFeild \n
EOD;
// Client message body
$body2 = <<<EOD

<p style="margin-left:10px;font-family:Calibri"><img alt="" src="http://www.kahinihoteldigha.com/images/kahini.png"></p>

Dear $nameFeild,

	

         <p style="font-family:Calibri">Thank you for contacting Kahini Hotel. One of our representative will contact you the soonest. If you have more questions or information needed, please let us know. We are happy to serve you ! </p>
         
        
         <p style="font-family:Calibri">Kahini Hotel Team <br>Forest Bungalow Road, Old Digha, Purba Medinipur - 721428 . : +03 220266014
			
			 
			  <br> http://www.kahinihoteldigha.com <br> animesh@kahinihoteldigha.com </p>
		 
		 <p style="color:#0099FF"> <img alt="" src="http://fanpagelist.com/images/facebook-32x32.png"> &nbsp;  
		  <img alt="" src="http://www.open-emr.org/pics/Twitter-icon.png"> &nbsp;
		  <img alt="" src="http://icons.iconarchive.com/icons/hopstarter/social-bookmark/32/Linked-In-icon.png"> </p>
		 
		 
<p  style="font-size:x-small;color:#0099FF;font-family:Calibri">This e-mail was automatically sent by Kahini Hotel Administration Directory and is for your reference. Please do not reply to this e-mail address.<br>
Powered by HexCode Technologies</p>
<img src="http://www.hexcodetechnologies.com/images/logo.gif" style="width:135px;height:50px">

EOD;
	$headers = "From: $emailFeild\r\n";
	$header = "From: $noreply@kahinihoteldigha.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
	$success = mail($webMaster,$emailSbuject,$body,$headers);
	$success1 = @mail($emailFeild,$emailSbuject2,$body2,$header);
	/*Result*/
	
	
	$theResults = <<<EOD
EOD;

echo  "$theResults";


?>
<?php 

include('connection.php');
$t=time();
mysqli_query($conn,"INSERT INTO contact (name, phone, email, subject,comments,contact_date)VALUES('$nameFeild','$phoneFeild','$emailFeild','$subjectFeild','$commentsFeild','$t')");
header("location: thankyou.html");
exit();
		

?>