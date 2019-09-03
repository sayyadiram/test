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
  
    <form  method="post" action="publication_details.php">
        <div class="container">
            <div class="row">
                <div class="col-25">
                <label for="publication">Post Id</label>
                </div>
                <div class="col-75">
                    <input type="number" name="post_id">
                </div>
            </div>
            <div class="row">
				<input type="submit" value="SHOW POST" name="Show"> 
			</div>
        </div>
	</form>
</body>
</html>