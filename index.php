
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
