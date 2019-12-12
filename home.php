<?php

include 'header.php';

?>

<body>

<?php

include 'navbar.php';
include 'banner.php';

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

        <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
            <h2 class="card-title">How to center elements inside div?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          </div>
          <div class="card-footer text-muted">
             <ul class="user-posts">
              <li>Posted on December 9, 2019</li>
              <li><a href="#">Go to link &rarr;</a></li>
              <li><a href="#">Edit</a></li>
              <li><a href="#">Delete</a></li>
            </ul>
          </div>
        </div>

          <br>

          <div class="card mb-4">
            <div class="card-body">
            <h2 class="card-title">Does anyone know how to use INNER JOIN query in SQL?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 11, 2019
          </div>
        </div>

          <br>

          <div class="card mb-4">
            <div class="card-body">
            <h2 class="card-title">How to export database in SQL?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 13, 2019
          </div>
        </div>

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