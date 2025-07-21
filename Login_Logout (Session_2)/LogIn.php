<html>
<head>
  <meta charset="UTF-8" http-equiv="refresh"/>
  <title>Log-in</title>
  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'/>
  <link rel="stylesheet" href="css/style_1.css" media="screen" type="text/css"/>
  <link rel="stylesheet" href="css/style_2.css" media="screen" type="text/css"/>
</head>

<body>
  <div class="login-card">
    <h1>Log-in</h1><br />
  <form name='login_form' method='post' action='LogIn_Mailer.php'>
    <input type="text" name="adm_user" placeholder="Username" />
    <input type="password" name="adm_pwd" placeholder="Password" />
    <input type="submit" name="login" class="login login-submit" value="login" />
  </form>

  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
</body>
</html>