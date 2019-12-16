<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	
	body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}

.error {
  color: red;

}

</style>

<?php 
session_start();
include("database/database.php");
$username = $password = "";
$usernameErr = $passwordErr = "";

if (isset($_POST['btnlogin'])) {
    if (empty($_POST['username'])) {
      $usernameErr = "Username is required!";     
    }else {
     $username = $_POST['username'];
    }
  
    if (empty($_POST['password'])) {
      $passwordErr = "Password is Required!"; 
    }
    else {
      $password = $_POST['password'];
    }

    if ($username && $password) {
      $check_username = mysqli_query($conn , "SELECT * FROM tbl_users Where username= '$username' ");
      $check_username_row = mysqli_num_rows($check_username);
     if ($check_username_row) {
        $row = mysqli_fetch_assoc($check_username);
        $user_id = $row['user_id'];
        $db_password = $row ['password'];
        $account_type = $row ['account_type'];

        if ($password == $db_password) {

          $_SESSION['user_id'] = $user_id;





            if($account_type == 1) {
              //redirect to admin
              header('location: userdashboard/userposts.html'); 
            }else {
              //redirect to users
              header('location: userdashboard/userposts.html');
            }

        }else{
          $passwordErr = "Password is incorrect!";
        }


       
     }else{
       $usernameErr = "Username is not registered!";
     }

    }

}



?>

<body>
    <div id="login">
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>"> <span class="error"> <?php echo $usernameErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>"> <span class="error"> <?php echo $passwordErr; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="btnlogin" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="signup.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>