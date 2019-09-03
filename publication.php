<?php 
    //include 
    include_once'publication_details.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/publication.css">
    <title>Document</title>
</head>
<body>
    <div class="pagenav">
        <div class="nav-links">
            <a href="publication.php">PUBLISH</a>
            <a href="#">|</a>
            <a href="show_post.php">MANAGE PUBLICATION</a>
            <a href="#">|</a>
            <a href="logout.php">LOGOUT</a>
        </div><!--close navlinks-->
    </div><!--close nav-->
    <div class="title">
        <h2>Publication Form</h2>
    </div>
  
    <form  method="post" action="publication_details.php" enctype="multipart/form-data">
        <div class="container">
            <?php if(isset($_SESSION['msg'])):?>
                    <div class="row">
                        <?php
                            echo $_SESSION['msg'];
                           // unset($_SESSION['msg']);
                        ?>
                    </div>
            <?php endif ?>
            <div class="row">
                <div class="col-25">
                <label for="publication">Title</label>
                </div>
                <div class="col-75">
                    <input type="text" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Comment</label>
                </div>
                <div class="col-75">
                    <textarea name="comment" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Image Link</label>
                </div>
                <div class="col-75">
                    <input type="text" name="image_url" row="4">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Contact</label>
                </div>
                <div class="col-75">
                    <input type="number" name="contact">
                </div>
            </div>
            <div class="row">
				<input type="submit" value=" PUBLISH" name="Submit"> 
			</div>
        </div>
	</form>
</body>
</html>