<?php
	//link
	include_once'conn.php';
	include_once'admin_signin_details.php';
	
	//connect to database
	$db=mysqli_connect($servername,$username,$password,$dbname);

	//check connection 
	if($db->connect_error){
		die("connection failed:".$db);
	}
	
	$cnt = 0;
	$query="SELECT id,title,comment,image,contact FROM iram_post";
	$result=mysqli_query($db,$query);
	$cnt = mysqli_num_rows(mysqli_query($db,$query));

	if(!empty($_SESSION['post_id'])){
		$loggedIn_user_id=$_SESSION['post_id'];
	}

	function isLoggedIn() {
		return !empty($_SESSION['logged_user_name']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>NewsApp</title>
</head>
<body>
    <div class="container">

        <?php
            if(isLoggedIn()) {
                echo('
                    <div class="pagenav">
                        <div class="nav-links">
                            <a href="publication.php">PUBLISH</a>
                            <a href="#">|</a>
                            <a href="show_post.php">MANAGE PUBLICATION</a>
                            <a href="#">|</a>
                            <a href="logout.php">LOGOUT</a>
                        </div><!--close navlinks-->
                    </div><!--close nav-->
                ');
            } 
            else{
                echo ('
                    <div id="pageheader">
                        <div class="logo">
                            <img src="./assets/image/logo.png"  alt="News">
                            <label>Leading The Way</label>
                        </div>
                        <div class="contact">
                            <h2>+91 -123456789</h2>
                            <h3>news@gmail.com</h3>
                        </div>
                    </div>
                    <div id="pagebaner">
                        <img src="./assets/image/baner.jpeg" height=100% width=100%  alt="News">
                    </div>
                ');
            }
        ?>

    
        <div class="row">
            <?php 
                if($result){  
                    while($row=mysqli_fetch_array($result)){
                        if(isLoggedIn()) {
                            echo('
                                <div class="column"> 
                                    <div class="newmain">
                                        <div class="imagecontainer">
                                            <img src="data:image/jpeg;base64,'.$row["image"].'" class="imag1">
                                        </div>
                                        <div class="details">
                                            <h3>'.$row["title"].'</h3>
                                            <h4>'.$row["comment"].'</h4>
                                            <h5>'.$row["contact"].'</h5>
                                        </div>
                                    </div>
                                </div>'
                            );
                        } /*close if*/
                        else{
                            echo('
                                <div class="column"> 
                                    <div class="newmain">
                                        <div class="imagecontainer">
                                            <img src="data:image/jpeg;base64,'.$row["image"].'" class="imag1">
                                        </div>
                                        <div class="details">
                                            <h3>'.$row["title"].'</h3>
                                            <h4>'.$row["comment"].'</h4>
                                            <h5>'.$row["contact"].'</h5>
                                        </div>
                                    </div>
                                </div>'
                            );
                        }
                    }/*close while*/
                    mysqli_free_result($result);
                }/*close if($result)*/
                mysqli_close($db);
            ?>

        </div><!--close  row--> 
    </div>
</body>
</html>