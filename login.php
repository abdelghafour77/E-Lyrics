<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Login</title>
</head>

<body class="backgroundd">
  <div id="coverr" class="min-h-screen flex items-center justify-center mx-auto">
    <div id="form-ui" class="flex items-center justify-center right-0 md:justify-start md:right-48">
      <form id="form" method="post" action="controller/userController.php">
        <div id="close-form"></div>
        <div id="form-body">
          <div id="welcome-lines">
            <!-- <div id="w-line-1">Hi,lison</div> -->
            <!-- <div id="w-line-1">Hi</div> -->
            <div id="w-line-2">Welcome Back</div>
          </div>
          <div id="input-area">
            <div class="f-inp">
              <input type="text" placeholder="Email Address" name="email" />
            </div>
            <div class="f-inp">
              <input type="password" placeholder="Password" name="password" />
            </div>
          </div>
          <div id="submit-button-cvr">
            <button type="submit" id="submit-button" name="login">LOGIN</button>
          </div>
          <div id="forgot-pass">You dont have account yet? <a href="signup.php">Sign up now!</a></div>
          <div id="bar"></div>
        </div>
      </form>
      <div id="img-box" class="hidden md:flex">
        <div id="coverr"></div>
      </div>
    </div>
  </div>
  <?php session_start();
  require_once 'include/alert.php';
  ?>
</body>

</html>