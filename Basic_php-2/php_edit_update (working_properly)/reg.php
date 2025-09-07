<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Data Submit</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="regmailer.php">
  <table width="343" border="0">
    <tr>
      <th width="171" scope="row"><div align="left">Name</div></th>
      <td width="156"><label for="name"></label>
      <input type="text" name="name" id="name" required="required" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Class</div></th>
      <td><label for="class"></label>
        <select name="class" id="class">
          <option value="X">X</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Bengali</div></th>
      <td><label for="beng"></label>
      <input type="text" name="beng" id="beng" required="required"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">English</div></th>
      <td><label for="eng"></label>
      <input type="text" name="eng" id="eng" required="required" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Mathematics</div></th>
      <td><label for="math"></label>
      <input type="text" name="math" id="math" required="required"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">History</div></th>
      <td><label for="hist"></label>
      <input type="text" name="hist" id="hist" required="required" /></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Geography</div></th>
      <td><label for="geo"></label>
      <input type="text" name="geo" id="geo" required="required"/></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Science</div></th>
      <td><label for="scin"></label>
      <input type="text" name="scin" id="scin" required="required" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"> <div align="center">
        <input type="submit" name="button" id="button" value="Submit Marks" />
        <input type="reset" name="button2" id="button2" value="Reset" />
      </div></th>
    </tr>
  </table>
</form>
</body>
</html>
