
<?php

include 'header.php';


?>

<body>

<?php

include 'navbar.php';
include 'banner.php';
include 'userdashboard/server.php'

?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

            <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Side Widget -->
        <div class="card my-4" style="box-shadow: none;">
          <h5 class="card-header">My Profile</h5>
          <div class="avatar" style="margin: auto">
          <img class="card-img-top" src="https://i.ibb.co/NSzHzZC/avatar.png" width="200px" height="200px">
          </div>

          <div class="card-body">
            <table style="margin: auto">
              <tr>
                <td>User name:</td>
                <td class="userdata">cathy0619</td>
              </tr>
              <tr>
                <td>Member since:</td>
                <td class="userdata">Dec-09-19</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td class="userdata"> Active</td>
              </tr>
            </table>
          </div>
        </div>


        <!-- Categories Widget -->
        <div class="card my-4" style="box-shadow: none;">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h2 class="my-4 text-muted">
          <small>My Posts</small>
        </h2>

<!-- Forum Post -->
        <?php 
            while ($row = mysqli_fetch_array($result_posts)) { ?>

          <div class="card mb-4" style="box-shadow: 5px 5px 5px 2px #ccc;">
            <div class="card-body">
            <a href="single-post.php?post=<?php echo $row['post_id'];?>"><h2 class="card-title"><?php echo $row['post_title']; ?></h2></a>
            <p class="card-text"><?php echo $row['post_description']; ?></p>
            <a href="single-post.php?post=<?php echo $row['post_id'];?>">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <?php echo $row['created_at']; ?>

            <a href="#"><?php echo $row['username']; ?></a>
          </div>
        </div>
        <br>
      <?php } ?>

        
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php

include 'footer.php';

?>