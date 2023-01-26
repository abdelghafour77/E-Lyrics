<?php include_once 'include/session.php';
if (isset($_SESSION['id'])) {
  header("location: dashboard.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- BEGIN parsley css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
  <!-- END parsley css-->
  <title>Signup</title>
</head>

<body>
  <!-- navbar -->
  <?php require_once 'include/navbar.php';  ?>
  <div class="backgroundd">
    <div id="coverr" class="min-h-screen flex items-center justify-center mx-auto">
      <div id="form-ui" class="flex items-center justify-center md:justify-start ">
        <form id="form" method="post" action="controller/userController.php" data-parsley-validate>
          <div id="close-form"></div>
          <div id="form-body">
            <div id="welcome-lines">
              <div id="w-line-1">SIGN UP</div>
              <!-- <div id="w-line-2">Welcome Back</div> -->
            </div>
            <div id="input-area">
              <div>
                <input type="text" class="f-inp" placeholder="Full Name" name="fullname" required data-parsley-trigger="keyup" data-parsley-minlength="3" />
              </div>
              <div>
                <input type="email" class="f-inp" placeholder="Email Address" name="email" required data-parsley-trigger="keyup" data-parsley-pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,4}$" />
              </div>
              <div>
                <input type="password" class="f-inp" id="password" placeholder="Password" name="password" required data-parsley-trigger="keyup" data-parsley-minlength="8" />
              </div>
              <div>
                <input type="password" class="f-inp" placeholder="Repeat your password" name="r_password" required data-parsley-trigger="keyup" data-parsley-minlength="8" data-parsley-equalto="#password" />
              </div>
            </div>
            <div id="submit-button-cvr">
              <button class="bg-teal" type="submit" id="submit-button" name="signup">SIGN UP</button>
            </div>
            <div id="forgot-pass">Already you have account? <a href="login.php">Login now!</a></div>
            <div id="bar"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.6.3.min.js"></script>
  <script src="assets/js/parsley.min.js"></script>
  <script src="assets/js/main.js"></script>
  <?php require_once 'include/alert.php'; ?>
</body>

</html>