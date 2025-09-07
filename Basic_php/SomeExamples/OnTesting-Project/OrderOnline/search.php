<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
<form id="form1" name="form1" method="post" action="searchmailer.php">
  <table width="398" border="0">
    <tr>
      <th width="208" scope="row">Search by Sl_No:</th>
      <td width="180"><label for="id"></label>
      <input name="Sl_No" type="text" id="Sl_No" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <th scope="row">Search by Name:</th>
      <td><label for="fname"></label>
        <input name="fname" type="text" id="fname" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <th scope="row">Search by Company name:</th>
      <td><label for="company"></label>
        <input name="company" type="text" id="company" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="search" id="search" value="Search" /></th>
      </tr>
  </table>
</form>
</div>
</body>
</html>