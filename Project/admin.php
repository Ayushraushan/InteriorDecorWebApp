

<?php

include("config.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <style>
        
        h2{
            text-align: center;
            width: 100%;
            height: 25px;
            background-color: aliceblue;
            border-radius: 10px;
        }
        button{
            margin-top: 10px;
            width: 100px;
            margin-left: 135px;
    height: 30px;
    background-color: coral;
    font-size: 16px;
    font-weight: bold;
        }
        input{
            margin-top: 10px;
            margin-bottom: 10px;
            width: 210px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    /* border-top: none;
    border-left: none;
    border-right: none; */
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    /* margin-top: 30px; */
    font-family: sans-serif;
    margin-left: 80px;

        }
        .admin{
            background-color: pink;
            width: 30%;
            border-radius: 20px;
            height: 45vh;
           
            margin-top: 175px;
    margin-left: 506px;
        }
        label{
            margin-left: 80px;
    font-weight: bold;
    font-size: 20px;
    font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="admin">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   
        <h2 >Admin</h2>
        <div>
        
            <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Enter Your E-mail"  required><br>
        <label for="password">Password</label><br>
        <input type="pass" name="password" placeholder="Enter Your Password"  required><br>
        <button class="btnnn" name="submit" > log-in </button>
        </div>
        </form>
    </div>

<?php

    if(isset($_POST['submit']))
{
   

$email=$_POST['email'];
$password=$_POST['password'];
$email_search= "select * from add_user where email='$email' ";
$e_query = mysqli_query($mysqli,$email_search);
$email_count=mysqli_num_rows($e_query);









if($email_count)
{
  $email_pass= mysqli_fetch_assoc($e_query);
  $db_pass= $email_pass['password'];
  $_SESSION['u_name']=$email_pass['u_name'];
 
  if($db_pass){
     
         ?>
         <script>
             alert("login successful");
             location.replace("admin_page.php");
         </script>
         <?php
  }else{
    ?>
    <script>
        alert("password incorrect");
       
    </script>
    <?php
  }
     




 


}
else{
    ?>
    <script>
        alert("invalid email");
       
    </script>
    <?php




}


}

?>
   
</body>
</html>