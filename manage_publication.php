<?php 
    include_once 'publication_details.php';
    if(isset($_SESSION['post_id'])){
        $id=$_SESSION['post_id'];
        //echo $id;
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT title,comment,image,contact FROM iram_post WHERE id=$id");
        $record =mysqli_fetch_array($rec);
        $title=$record['title'];
        $comment=$record['comment'];
        $contact=$record['contact'];
        $image=$record['image'];
        //$id=$record['id'];   
    }
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
            <div class="">
                <input type="hidden" name="post_id"  value="<?php echo $id; ?>" >
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication" >Title</label>
                </div>
                <div class="col-75">
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Comment</label>
                </div>
                <div class="col-75">
                    <textarea name="comment" id="" cols="30" rows="10">
                    <?php echo $comment; ?>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Image Link</label>
                </div>
                <div class="col-75">
                    <input type="text" name="image_url" row="4" value="<?php echo $image; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="publication">Contact</label>
                </div>
                <div class="col-75">
                    <input type="number" name="contact" value="<?php echo $contact; ?>">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Edit" name="post_edit"> 
                <input type="submit" value="Delete" name="post_delete"> 
			</div>
        </div>
	</form>
</body>
</html>