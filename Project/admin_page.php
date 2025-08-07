
 <?php
session_start();
// error_reporting(0);
if(!isset ($_SESSION['u_name'])){
  

    header('location:admin.php');
}


?> 
<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
       h1 {
            text-align:center;
            background-color:hotpink;
            font-size:100px;
            color:white;
        }
        h2{
            text-align:center;
            font-size:40px;
            background-color:gold;
        }
        span{
            color:blue;
        }
        button{
         width:105px;
         height:35px;
         margin-top:20px;
         margin-left:50px;
         border-radius:5px;

        }
        a{
            text-decoration:none;
            color:black;
        }
        .admin{
            height:90vh;
           background-color:gray;
            display:flex;
          
        
        }
        a:hover{
            color:blue
        }
        h1:hover{
            background-color: blue;
            color:black;
        }
    </style>
</head>
<body>
    <h1>Admin Works</h1>
    <h2>Hello  <span> <?php  echo $_SESSION['u_name'];    ?></span>  </h2>
    <div class="admin">
        <div>
        <p>
            <button><a href="contact_user.php">contact</a></button>
        </p>
        <p>
            <button><a href="update.php">Update</a></button>
        </p>
        <p>
            <button><a href="user_feedback.php">feedback</a></button>
        </p>
        <p>
            <button><a href="registerd_user.php">registration</a></button>
        </p>
        <p>
            <button><a href="custom_design_display.php">Custom Design</a></button>
        </p>
        <p>
            <button><a href="add_user.php">Add User</a></button>
        </p>
        <p>
            <button><a href="remove.php">remove</a></button>
        </p>
        <button><a href="logout1.php">Logout</a></button>
        </div>
        <div style="margin-left: 300px;
                    margin-top: 50px;">
            <p style="text-align: center;
                  font-size: 45px; color:aqua"> Concept home</p>
            <p style="font-size: 30px; color:lightyellow"> This is the Admin page of Interior Decor</p>
        </div>
    </div>
    
</body>
</html>