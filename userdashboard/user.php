<?php 
    include 'server.php';

    if(isset($_GET['edit'])){
        $post_id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM tbl_posts WHERE post_id=$post_id");
        $record = mysqli_fetch_array($rec);
        $post_title = $record['post_title'];
        $post_description = $record['post_description'];
        $post_id = $record['post_id'];
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FORUM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    KSA
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="userposts.php">
                        <i class="pe-7s-note2"></i>
                        <p>My Post</p>
                    </a>
                </li>
                <li>
                    <a href="createpost.php">
                        <i class="pe-7s-note"></i>
                        <p>Create</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li style="display: flex; align-items: center;">
                           <a>
                                <i class="pe-7s-search"></i></a>
                            <form>
                               <input type="search" name="" placeholder="Search" style="border: 2px solid; border-radius: 5px; background:transparent;">
                            </form>
                        </li>
                        <li>
                           <a href="" style="display: flex;">
                                <i class="pe-7s-users"></i>
                               <p> Welcome!</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="display: flex;">
                                <i class="pe-7s-power"></i>
                                <p> Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">USER PROFILE</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>

                                                
                                                <input type="hidden" class="form-control" placeholder="Username" value="<?php echo $row['user_id']; ?>">
                                                <input disabled type="text" class="form-control" placeholder="Username" value="">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input disabled type="email" class="form-control" placeholder="Email" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input disabled type="text" class="form-control" placeholder="Full Name" value=""><br>
                                                <button class="btn btn-info btn-fill pull-right" href="user.php?edit=">Edit</button>
                
                                            </div>
                                            <br><hr>
                                            <div class="col-md-12" style="border: 1px solid #bbbbbb; border-radius: 5px; margin: 5px;" >
                                                <div style="display: flex; justify-content: space-between">
                                                    <h5>Change Password</h5>
                                                    <button  type="submit" class="btn btn-info btn-fill" >Edit</button>
                                                </div>
                                                <br>
                                            <div  class="form-group-pass" style="border: 1px solid #bbbbbb; border-radius: 5px; margin: 5px;">
                                                <form>
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" placeholder="Old Password">

                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="New Password">

                                                <label>Retype Password</label>
                                                <input type="password" class="form-control" placeholder="Retype Password"><br>

                                                <button type="submit" class="btn btn-info btn-fill" > Update </button>
                                                </form>
                                            </div>

         
                                            </div>
                                        </div>

                                        


                                        
                                    </div>

                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                        <img class="avatar border-gray" src="" alt="..."/>
                                    <!-- <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/> -->

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                        
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">

                
            </div>
        </footer>

    </div>
</div>

</body>
    

    

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
