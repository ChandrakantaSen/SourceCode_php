<?php
/* subject and email varialbles*/
session_start();
$reg_no = $_SESSION['reg_no'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$emailSbuject = 'ABE Initiative: New Applicant with name '.$name.' and registration no. '.$reg_no;
$webMaster = 'info@hexcodetechnologies.com';
$emailSbuject2 = 'Thank you '.$name.' for registration, your registration no. is '.$reg_no;
$client = $email;
//echo $client;

// admin message body
$body= <<<EOD
Dear JICE Admission Administrator,<br /><br/> A NEW application has been submitted. You can see it by going to this <a href='http://hctrnd.com/JICE/reg_no.php'>link</a> and typing the application registration number as $reg_no.<br />
Thank you.<br><br>
<img src="http://sv2.jice.org/e/images/logo_big.gif" style="width:150px"><br>
Japan International Cooperation Center(JICE)<br>
Odakyu Dai-ichi Seimei Bldg., 16th Floor<br>
2-7-1, Nishi-shinjuku, Shinjuku-ku, Tokyo 163-0716
EOD;
// Client message body
$body2 = <<<EOD

Dear $name,<br /><br/> The application has been submitted. You can see it by going to this <a href='http://hctrnd.com/JICE/reg_no.php'>link</a> and typing the application registration number as $reg_no.<br />
Thank you.<br><br>
<img src="http://sv2.jice.org/e/images/logo_big.gif" style="width:150px"><br>
Japan International Cooperation Center(JICE)<br>
Odakyu Dai-ichi Seimei Bldg., 16th Floor<br>
2-7-1, Nishi-shinjuku, Shinjuku-ku, Tokyo 163-0716


EOD;
	$headers = "From: info@hexcodetechnologies.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
	$header = "From: noreply@hexcodetecnologies.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
	$success = mail($webMaster,$emailSbuject,$body,$headers);
	$success1 = @mail($client,$emailSbuject2,$body2,$header);
	/*Result*/
	
	
	$theResults = <<<EOD
EOD;

echo  "$theResults";
header("Location: http://hctrnd.com/JICE/show_form.php");
exit;
?>