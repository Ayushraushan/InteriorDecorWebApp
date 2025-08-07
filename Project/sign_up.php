
<?php
include("config.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .logo{
            display: flex;
            background-color: aqua;
            justify-content: center;
            align-items: center;

        }
        .logo img{
            width: 120px;
    border-radius: 60px;
    margin-left: 50px;
    margin-top: 10px;
    margin-bottom: 5px;
  
            
        }
        /* body{
            background: url(../images/bg-box.png);
        } */

        h1 {
            font-size: 40px;
            text-transform: capitalize;
          
            text-align: center;
            opacity: 0.5;

        }
        body{
            background: linear-gradient(#bff098,#6FD6FF);
        }

        .form {
            height: fit-content;
            background:linear-gradient(#00B7FF,#FFFFC7);
            width: 40%;
            margin-left: 430px;
            opacity: none;
            margin-top: 5px;
        }

        label {
            font-size: 25px;
    font-weight: bold;
    margin-left: 177px;

        }

        input {
            width: 74%;
    height: 35px;
    outline: none;
    border-bottom: 2px;
    margin-top: 5px;
    margin-bottom: 10px;
    color: cadetblue;
    font-size: 20px;
    margin-left: 47px
        }

        ::placeholder {
            color: rgb(90, 88, 88);
            text-align: center;
            opacity: 0.8;


        }
        input{
            color:lightsalmon;
            text-align: center;

        }

        .btnnn {
            text-align: center;
            margin-left: 200px;
            width: 105px;
            height: 39px;
            color: blue;
            font-weight: bolder;
            font-size: large;
            background-color: #3e423729;
        }
        p{
            margin-top: 10px;
        }

        p a {
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            margin-left: 220px;
            border-bottom: 2px solid rebeccapurple;
        }
    </style>
</head>

<body>
<div class="logo">
        <img src="../images/download.png" alt="error" id="logo">
        <h1>registration</h1>
        
    </div>
   
    <div class="form">
        <form action="#" method="post">
        <label for="first-name">First-Name</label><br>
        <input type="text" placeholder="Enter Your First-Name" name="f_name" required><br>
        <label for="last-name">Last-Name</label><br>
        <input type="text" placeholder="Enter Your Last Name" name="l_name" required><br>
        <label for="user">Username</label><br>
        <input type="text" placeholder="Username" name="u_name" required><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" placeholder="Enter Your E-mail" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="pass" placeholder="Enter Your Password" required><br>
        <label for="phone">Phone</label><br>
        <input type="tel" placeholder="Enter Your Number" name="phone" required><br>
        <button class="btnnn" name="register">Register</button><br>
        <p> <span style="color: blue; font-size:20px ;margin-left: 180px;">Already an account</span>  <br><a href="login.php">Login</a></p>
    </form>
        <!-- <div>
            <img src="https://super.homelane.com/homeoffice/HLKT00000603_TUCK-HDHMR01-5.jpg" alt="">
        </div> -->
    </div>
    <?php

if(isset($_POST['register']))
{
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$u_name=$_POST['u_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];

$passcode= password_hash($pass, PASSWORD_BCRYPT);
$email_query="select * from registration where email='$email'";
$query=mysqli_query($mysqli,$email_query);
$email_count= mysqli_num_rows($query);




if($email_count>0)
{
   echo'<script> alert("email already exist") </script>';


}
else{
    $result=mysqli_query($mysqli,"insert into registration values('$f_name','$l_name','$u_name','$email','$passcode','$phone')");
   
        if($result){
            echo '<script> alert("Registered sucessfully") </script>';
        }
        else{
            echo'<script> alert("failed") </script>';
        }
}
    

}





?>

</body>

</html>
