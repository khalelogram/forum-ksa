<?php 
    include 'server.php';
    session_start();

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

    <style>
        .userbtn_edit{
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
            margin-right: 10px;
        }
        .userbtn_edit:hover{
            box-shadow: 0px 0px 10px #2E8B57;
            color:white;
        }


        .userbtn_delete{
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }
         .userbtn_delete:hover{
            box-shadow: 0px 0px 10px red;
            background: red;
            color:white;

        }

        .posthistory{
            margin:auto;text-align: left;padding: 20px;border: 1px solid #bbbbbb; border-radius: 5px; margin: 5px;
        }

    </style>

</head>
<body>

<div class="wrapper">
     <div class="sidebar" data-color="azure">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="../index.php" class="simple-text">
                    KSA
                </a>
            </div>

            <ul class="nav">
                <li class="active">
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
                <li>
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
                               <p> Welcome! <?php echo $_SESSION["username"]; ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" style="display: flex;">
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">MY POSTS</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"]; ?>">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group"style="text-align: right;">
                                                <p> Total Posts : <?php echo mysqli_num_rows($result_posts) ?> </p>
                                                <?php 
                                                    while ($row = mysqli_fetch_array($result_posts)) { ?>
                                                        
                                                <div class="posthistory">
                                                    
                                                <h5><a href="../single-post.php?post=<?php echo $row['post_id'];?>"><?php echo $row['post_title'];?></a>  <small> ======> <?php echo $row['created_at']; ?> </small> 
                                                    </h5> 
                                                <p style="font-size: 12px">
                                                    <?php echo $row['post_description']; ?>
                                                    </p>
                                            
                                                <div style="display: flex; justify-content: space-between">
                                                <div>
                                                <a class="userbtn_edit" href="createpost.php?edit=<?php echo $row['post_id'];?>"> Edit</a>
                                                <a class="userbtn_delete" href="server.php?del=<?php echo $row['post_id'];?>"> Delete</a>
                                                </div>
                                                <div align="right">
                                                <a href="">
                                                    <p> 
                                                        0
                                                     <i class="pe-7s-comment"> Comments</i></p></a>
                                                </div>
                                                </div>
                                                </div>

                                                <?php } 



                                                ?>


                                                

                                            </div>
                                        </div>

                                    </div>

                                    
                                </form>
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
