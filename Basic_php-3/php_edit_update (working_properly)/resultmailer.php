<?php
include_once "connect.php";
$regno=$_POST['regno'];

$result=mysql_query("SELECT * FROM `mytbl` WHERE `reg_no`='$regno'");
while($row = mysql_fetch_array($result))
  {
	echo "<table width='343' border='1'>
	<tr>
    <th width='171' scope='row'><div align='left'>Registration No.</div></th>
    <td width='156'><label for='name'>".$row['reg_no']."</label></td>
  </tr>
  <tr>
    <th width='171' scope='row'><div align='left'>Name</div></th>
    <td width='156'><label for='name'>".$row['name']."</label></td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Class</div></th>
    <td><label for='class'></label>".$row['class']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Bengali</div></th>
    <td><label for='beng'></label>".$row['beng']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>English</div></th>
    <td><label for='eng'></label>".$row['eng']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Mathematics</div></th>
    <td><label for='math'></label>".$row['maths']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>History</div></th>
    <td><label for='hist'></label>".$row['hist']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Geography</div></th>
    <td><label for='geo'></label>".$row['geo']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Science</div></th>
    <td><label for='scin'></label>".$row['scinc']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Total</div></th>
    <td>".$row['total']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Average</div></th>
    <td>".$row['avg']."</td>
  </tr>
  <tr>
    <th scope='row'><div align='left'>Grade</div></th>
    <td>".$row['grade']."</td>
  </tr>
</table>";  
  
	}
echo "<br/><a href='result.php'>Show Result</a>";
?>