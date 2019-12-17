<?php 
	$post_title = "";
	$post_description = "";

	$db = mysqli_connect('localhost', 'root', '', 'db_forum');

	if (isset($_POST['save'])) {
		$post_title = $_POST['post_title'];
		$post_description = $_POST['post_description'];
		$user_id = $_POST['user_id'];

		$query = "INSERT INTO tbl_posts (post_title, post_description, user_id) VALUES('$post_title', '$post_description','$user_id')";
		mysqli_query($db, $query);
		header('location: userposts.php');
	}

	if(isset($_POST['cancel'])){
		header('location: userposts.php');
	}

	if(isset($_POST['update'])){
		$post_title = mysqli_real_escape_string($db,$_POST['post_title']);
		$post_description = mysqli_real_escape_string($db,$_POST['post_description']);
		$post_id = mysqli_real_escape_string($db,$_POST['post_id']);

		mysqli_query($db, "UPDATE tbl_posts set post_title='$post_title', post_description='$post_description' WHERE post_id=$post_id");
		header('location: userposts.php');
	}

	if(isset($_GET['del'])){
		$post_id = $_GET['del'];

		mysqli_query($db, "DELETE FROM tbl_posts WHERE post_id=$post_id");
		header('location: userposts.php');
	}
		// $result_posts = mysqli_query($db, "SELECT * FROM tbl_posts ORDER BY post_id DESC ");
		$result_posts =mysqli_query($db, "SELECT * FROM `tbl_posts` INNER JOIN tbl_users ON tbl_posts.user_id = tbl_users.user_id ORDER BY post_id DESC ");
 ?>