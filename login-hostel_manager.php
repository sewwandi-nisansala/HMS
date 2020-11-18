<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
    <style>
      .button {
        background: #1ec6e4;
        color: #ffffff;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        padding: 12px 180px;
        cursor: pointer;
        width: 100%;
        border-radius: 6px;
        
      }
     
    </style>
</head>


<body>
    <h1>Hostel Rooms Management System</h1>
    <div class=" w3l-login-form">
        <h2>Hostel-Manager/Admin Login</h2>
        <form action="includes/login-hm.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <!-- <button type="submit" name="login-submit">Login</button> -->
        
            <br>
            <a href="admin/admin_home.php" class="button">Login</a>
        </form>
          <p class=" w3l-register-p">Login as<a href="index.php" class="register"> Student</a></p>
      <!--  <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>-->
    </div>
    <footer>
         </footer>

</body>

</html>
