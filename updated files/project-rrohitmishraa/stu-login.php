<?php
include('login.php'); 
?>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stu-login.css">
  </head>
  <body>
    <div class="container">
        <form name="myform" action="login.php" method="post">
          <center>
          <fieldset id="login-area">
            <legend align="center">
            <img id="circle" src="img/stu.png">
            </legend>
              <div class="placeholders">
                <h2 id="head"> Student Login </h2>
                <input id="username" type="text" name="uname" placeholder="Username" required><br>
                <input id="pass" type="password" name="pass" placeholder="Password" required>
                <input id="input-btn" type="submit" value="" /><br>
              </div>
              <a id="r-pass" href="r_pass.php"> Forgot Password </a><br>
              <a id="r-sign" href="chatbot.php"> Sign Up here.</a>
            </center>
        </fieldset>
      </form>

      <div id="skew-new">
        Rohit
      </div>

    </div>
  </body>
</html>

