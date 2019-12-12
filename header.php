
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

  <style type="text/css">
    .form-group{
      line-height: 3px
    }

  </style>


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">KSA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div class="input-group" style="padding-right: 10px">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#popUpSignUp">Sign Up</a>
          </li>
          <li>
          <a class="nav-link js-scroll-trigger"  href="#" data-toggle="modal" data-target="#popUpLogIn">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="modal fade" id="popUpSignUp">
    <div class="modal-dialog" style="width: 360px">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
           <h3 class="modal-title">Sign Up Form</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form role="form">
            <div class="form-group">
              <label for="inputFullName">Full Name</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="inputUserName">Username</label>
              <input type="password" class="form-control" id="inputUserName" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </form>
        </div>
        <!-- footer -->
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">Sign Up</button>
        </div>
        
      </div>
    </div>
  </div>

    <div class="modal fade" id="popUpLogIn">
    <div class="modal-dialog" style="width: 360px">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
           <h3 class="modal-title">Login Form</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form role="form">
            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
          </form>
        </div>
        <!-- footer -->
        <div class="modal-footer">
          <button class="btn btn-primary btn-block">Log In</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to KSA Forum</h1>
      <p class="lead">A place of discussion for KAL Skills Akademie Students</p>
    </div>
  </header>
