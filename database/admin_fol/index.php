<?php 
	include("fnc_login.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CALM Admin.Portal! | </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">
	<link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- PNotify -->
    <link href="../../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" class="register-form" id="login-form">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default btn-sm" name="login" id="login">Log in</button>
                <a class="reset_pass" href="page_404.php">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
				
				<p>Login to <a href="../../index.php">another account!</a></p>

                <div class="clearfix"></div>
                <br />	

                <div>
                  <h1><i class="fa fa-institution"></i> CALM | ADMINISTRATOR!</h1>
                  <p>©2018 All Rights Reserved. Computerized Assesment Learning in Mathematics. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" class="register-form" id="register-form">
              <h1>Parent Account</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
			  <div>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required="" />
              </div>
			  <div>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required="" />
              </div>
			  <div>
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middlename" required="" />
              </div>
              <div>
                
				
				<button class="btn btn-default source" type="submit" class="btn btn-default btn-sm" name="signup" id="signup" onclick="new PNotify({
                                  title: 'Success',
                                  type: 'success',
                                  text: 'That thing that you were trying to do worked!',
                                  nonblock: {
                                      nonblock: true
                                  },
                                  styling: 'bootstrap3'
                              });">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in</a>
				  Click log in after submission!
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-institution"></i> CALM | PARENT!</h1>
                  <p>©2018 All Rights Reserved. Computerized Assesment Learning in Mathematics. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
	
	<!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="../../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>
