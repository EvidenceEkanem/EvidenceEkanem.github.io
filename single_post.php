<?php 
session_start();
// session_start();
include_once('header.php');
include_once "checksession.php";
?>

<?php
    $id = (int) $_GET['id'];
    require "connection.php";
    $sql = "SELECT * FROM posts WHERE id=$id";

    $result = $conn->query($sql);

    $post = $result->fetch(PDO::FETCH_ASSOC);

    if(!$post) {
        header("HTTP/1.0 404 Not Found");
        exit;
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<section role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 border-bottom">
                From <?= $post['user_id']; ?>'s journal!
            </h3>
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
            <div class="blog-post">
                <h2 class="blog-post-title"><?=$post['title']; ?></h2>
                <p class="blog-post-meta"><?=date("M d, Y", strtotime($post['post_date'])); ?> <small class="text-danger"> by <?= $post['user_id']; ?></small></p>
                
                <p>
                    <?=$post['content']; ?>
                </p>

                <nav class="blog-pagination">
                    <a class="btn btn-success" href="new_post.php">Create new post</a>

                    <?php
                    $id = (int) $_GET['id'];
                    require "connection.php";
                    $sql = "SELECT * FROM posts WHERE id=$id";
                
                    $result = $conn->query($sql);
                
                    $post = $result->fetch(PDO::FETCH_ASSOC);

                    echo    '<a class="btn btn-primary" href="edit.php?id=' . $id . '">Edit</a>
                            <a class="btn btn-danger" href="delete.php?id=' . $id . '">Delete</a>';
                                    
                        ?>
                </nav>
            </div>

        </div>
    </div><!-- /.row -->

</section>
<?php include "footer.php" ?>