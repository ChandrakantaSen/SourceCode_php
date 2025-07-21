<?php
include_once "connect.php";
$regno=$_POST['regno'];

$result=mysql_query("SELECT * FROM `mytbl` WHERE `reg_no`='$regno'");
while($row = mysql_fetch_array($result))
  {
	echo "<form id='form1' name='form1' method='post' action='updatemailer.php'>
	<table width='343' border='0'>
	<tr>
    <th width='171' scope='row'><div align='left'>Registration No.</div></th>
    <td width='156'><input type='text' id='id' value={$row['reg_no']} size='30' maxlength='30' disabled/></td>
	  <input name='id' type='hidden' id='id' value={$row['reg_no']} size='30' maxlength='30'/></td>
  </tr>
  <tr>
    <th width='171' scope='row'><div align='left'>Name</div></th>
    <td width='156'><input name='name' type='text' id='name' value={$row['name']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Class</div></th>
    <td><label for='class'></label>".$row['class']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Bengali</div></th>
    <td><input name='beng' type='text' id='name' value={$row['beng']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>English</div></th>
    <td><input name='eng' type='text' id='name' value={$row['eng']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Mathematics</div></th>
    <td><input name='math' type='text' id='name' value={$row['maths']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>History</div></th>
    <td><input name='hist' type='text' id='name' value={$row['hist']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Geography</div></th>
    <td><input name='geo' type='text' id='name' value={$row['geo']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Science</div></th>
    <td><input name='scin' type='text' id='name' value={$row['scinc']} size='30' maxlength='30' /></td>
  </tr>
  <tr>
    <th th colspan='2' scope='row'><div align='center'> <input type='submit' name='button' id='button' value='Edit Details' /></div></th>
  </tr>
  
</table>
</form>
";  
  
	}

?>