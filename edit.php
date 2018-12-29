<?php 
session_start();
require "connection.php";
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";

$result = $conn->query($sql);
$students = $result->fetch(PDO::FETCH_ASSOC);

?>


<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include_once "header.php" ?>
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
                <form action="update.php" method="post">
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?=$id?>">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title" type="text" class="form-control" value="<?=$students['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Post Content</label>
                        <input name="content" type="message" class="form-control" value="<?=$students['content']?>"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">update Post</button>
                </form>
            </div>
        </div>
</section>
</section>
</body>
</html>

<?php include_once "footer.php" ?>