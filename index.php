
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

    <div class="row justify-content-center align-items-center">


      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <div class="container">

        <h2 class="my-4 text-muted">
          <small>Trending Topics</small>
        </h2>

                <!-- Pagination -->
        <ul class="pagination justify-content mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Oldest</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Latest &rarr;</a>
          </li>
        </ul>
      </div>

        <!-- Blog Post -->
          <div class="card mb-4" style="box-shadow: 5px 5px 5px 2px #ccc;">
            <div class="card-body">
            <h2 class="card-title">How to connect to database using php?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 10, 2019 by
            <a href="#">Moi</a>
          </div>
        </div>

          <br>

          <div class="card mb-4" style="box-shadow: 5px 5px 5px 2px #ccc;">
            <div class="card-body">
            <h2 class="card-title">Backend integration help please?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 12, 2019 by
            <a href="#">Manuel</a>
          </div>
        </div>

          <br>

          <div class="card mb-4" style="box-shadow: 5px 5px 5px 2px #ccc;">
            <div class="card-body">
            <h2 class="card-title">Database Schema Tips?</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on December 13, 2019 by
            <a href="#">Selah</a>
          </div>
        </div>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 3M-SC 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </script>

</body>

</html>
