<?php
session_start();
include_once('header.php');
include_once "checksession.php";

?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

<section id="new_post">
	<section class="container create_post_section pt-5">
			<div class="row mb-2">
				<div class="col-md-12">
				<?php
						if(isset($_SESSION['error'])) {
							echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
							unset($_SESSION['error']);
						}

						if(isset($_SESSION['message'])) {
							echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
							unset($_SESSION['message']);
						}
					?>
					<form action="processPost.php" method="post">
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of Post">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Post Content</label>
							<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>

						<button type="submit" class="btn btn-primary">Create Post</button>
					</form>
				</div>
			</div>
	</section>
</section>
	</body>
</html>

<?php include_once "footer.php" ?>