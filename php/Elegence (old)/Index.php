<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta http-equiv="refresh">
  <link rel="stylesheet" href="css/login_style.css" media="screen" type="text/css" />
</head>

<body>
  <span href="#" class="button" id="toggle-login">Log in</span>
<div id="login">
  <div id="triangle"></div>
  <h1>Login</h1>
  <!-- form part starts here -->
  <form name="form1" method="post" action="login_mailer.php">
    <input type="text" name="adm_user" placeholder="Username" />
    <input type="password" name="pwd" placeholder="Password" />
    <input type="submit" value="Log in" name="login" />
  </form>
  <!-- form part ends here -->
</div>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src="js/index.js"></script>

</body>
</html>