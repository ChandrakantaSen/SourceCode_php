<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Data Submit</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="resultmailer.php">
  <table width="343" border="0">
    <tr>
      <th width="171" scope="row"><div align="left">Registration Number</div></th>
      <td width="156"><label for="name"></label>
        <label for="regno"></label>
      <input type="text" name="regno" id="regno" required="required" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"> <div align="center">
        <input type="submit" name="button" id="button" value="Show Result" />
        <input type="reset" name="button2" id="button2" value="Reset" />
      </div></th>
    </tr>
  </table>
</form>
</body>
</html>
