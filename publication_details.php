<?php
    //include database connection  value
    include_once'conn.php';
    //start session
    session_start();
    $msg="";
    //connect to database
    $db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    //  else{
    //      echo"connection done";
    //  }

    if(isset($_POST['Submit'])){
        $title=$_POST['title'];
        $comment=$_POST['comment'];
        $image=$_POST['image_url'];
        $imageData = base64_encode(file_get_contents($image));
        $contact=$_POST['contact'];

        $query = "INSERT INTO iram_post (title, comment,image,contact) VALUES ('$title','$comment','$imageData','$contact')";
        mysqli_query($db,$query);
        header('location:index.php');
    }

    if(isset($_POST['Show'])){
        $post_id=$_POST['post_id'];
        $_SESSION['post_id']=$post_id;
        header('location:manage_publication.php');
        //echo $post_id;
    }
   
    if(isset($_POST['post_edit'])) {
        $id=mysqli_real_escape_string($db, $_POST['post_id']);
        $title=mysqli_real_escape_string($db,$_POST['title']);
        $comment=mysqli_real_escape_string($db,$_POST['comment']);
        $image=$_POST['image_url'];
        $imageData = base64_encode(file_get_contents($image));
        $contact=mysqli_real_escape_string($db,$_POST['contact']);
        mysqli_query($db,"UPDATE iram_post SET title='$title',comment='$comment',image='$imageData',contact='$contact' WHERE id=$id");
        header('Location:index.php');
    }   
    
    if(isset($_POST['post_delete'])) {
        $post_id=$_POST['post_id'];
        mysqli_query($db,"DELETE FROM  iram_post WHERE id=$post_id");
	    header('location:index.php');
    }

?>