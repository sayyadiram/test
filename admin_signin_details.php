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
   
   if(isset($_POST['Login'])){
		$admin_name=$_POST['admin_name'];
        $password=$_POST['password'];
        $query="SELECT admin_name, password,id FROM iram_admin WHERE admin_name = '$admin_name'";
        $result=mysqli_query($db,$query);
        $row = mysqli_fetch_array($result);
        if($row["admin_name"]==$admin_name && $row["password"]==$password){
            $new_id=$row["id"];
            //give id ino session
            $_SESSION['id']=$new_id;
            $_SESSION['logged_user_name']=$admin_name;
            header('Location: index.php');
        } 
        else {
            $_SESSION['msg']="Please enter valid user name and password";
            header('Location: admin_signin.php');
        }
    
    } 
      
    if(isset($_POST['Cancel'])){

        header('location: index.php'); //redirect to home page 
        
    }

?>