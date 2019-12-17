<?php include("database/database.php");

 ?>

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
include("database/database.php");
$fullname = $email = $username = $password = "";
$fullnameErr = $emailErr = $usernameErr = $passwordErr = "";


if(isset($_POST["btnRegister"])){
  if (empty($_POST["fullname"])) {
    $fullnameErr = "Full Name is Required !";
  }elseif(strlen($_POST["fullname"])< 2) {
    $fullnameErr = "Buong pangalan Tanga kaba";
  }else{
    $fullname = $_POST["fullname"];
  }

  if(empty($_POST["email"])) {
    $emailErr = "Email is Required !" ;
  }elseif(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    $emailErr = "invalid email format";
  }else{
    $email = $_POST["email"];
  }

  if(empty($_POST["username"])) {
    $usernameErr = "Username is required";
  }
  elseif(strlen($_POST["username"])< 2) {
    $usernameErr = "Username is too Short";
  }else {
    $username = $_POST["username"];
  }

  if(empty($_POST["password"])) {
    $passwordErr = "Password is required";
  }elseif(strlen($_POST["password"])< 2) {
    $passwordErr = "Your password is too short";
  }else{
    $password = $_POST["password"];
  }


  if($fullname && $email && $username && $password )  {
    
      $sql = "INSERT INTO tbl_users (full_name,email,username,password)
          VALUES ('$fullname','$email','$username','$password')";
      mysqli_query($conn, $sql); 
      header('location: login.php');

  }
    
}










?>






<body>
    <div id="login">
        <h1 class="text-center text-white pt-5">Sign-Up</h1>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center align-content-center">
                <div id="login-column" class="col-md-5">
                    <div id="login-box" class="col-md-11" style="height: 500px;margin-top: 0px">
                        <form id="login-form" class="form" action="" method="post">
                            <!-- Display validation Error Here -->
                          



                            <div class="form-group">
                                <label for="fullname" class="text-info">Full Name:</label><br>
                                <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $fullname; ?>">
                            </div> <span class="error"><?php echo $fullnameErr; ?></span>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                            </div>  <span class="error"><?php echo $emailErr; ?></span>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                            </div> <span class="error"><?php echo $usernameErr; ?></span>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                            </div> <span class="error"><?php echo $passwordErr; ?></span>

                            <div class="form-group">
                                <input type="submit" name="btnRegister" class="btn btn-info btn-md" value="Register"><br>
                                <p>Are You Already Registered?  <a href="login.php" class="text-info">Sign-in</a> </p>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>