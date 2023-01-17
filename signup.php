<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Signup</title>
</head>

<body class="backgroundd">
  <div id="coverr" class="min-h-screen flex items-center justify-center mx-auto">
    <div id="form-ui" class="flex items-center justify-center left-0 md:justify-start md:left-48">
      <form id="form" method="post" action="">
        <div id="close-form"></div>
        <div id="form-body">
          <div id="welcome-lines">
            <div id="w-line-1">SIGN UP</div>
            <!-- <div id="w-line-2">Welcome Back</div> -->
          </div>
          <div id="input-area">
            <div class="f-inp">
              <input type="text" placeholder="Full Name" />
            </div>
            <div class="f-inp">
              <input type="text" placeholder="Email Address" />
            </div>
            <div class="f-inp">
              <input type="password" placeholder="Password" />
            </div>
            <div class="f-inp">
              <input type="password" placeholder="Repeat your password" />
            </div>
          </div>
          <div id="submit-button-cvr">
            <button type="submit" id="submit-button">SIGN UP</button>
          </div>
          <div id="forgot-pass">Already you have account? <a href="login.php">Login now!</a></div>
          <div id="bar"></div>
        </div>
      </form>
      <div id="img-box" class="left-card hidden md:flex">
        <div id="coverr"></div>
      </div>
    </div>
  </div>
</body>

</html>