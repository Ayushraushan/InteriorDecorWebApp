<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add admin</title>
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
    height: 25px;
    background: transparent;
    /* border-bottom: 1px solid #ff7200; */
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
        ::placeholder{
            color:wheat;
        }
        .admin{
            background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 11%, rgba(252,70,107,1) 85%);
            width: 30%;
            border-radius: 20px;
            height: 45vh;
           
            margin-top: 175px;
    margin-left: 506px;
        }
        label{
            margin-left: 80px;
    font-weight: bold;
    font-size: 16px;
    font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="admin">
        <form action="#" method="post">
           
                <h2 >User</h2>
                <div>
                    <label for="u_name">Username</label><br>
                <input type="text" name="u_name" placeholder="Enter username" required><br>
                
                    <label for="email">Email</label><br>
                <input type="email" name="email" placeholder="Enter Your E-mail" required><br>
                <label for="password">Password</label><br>
                <input type="pass" name="password" placeholder="Enter Your Password" required><br>
                <button class="btnnn" name="submit" > Add </button>
                </div>
                </form>
            </div>


            <?php

if(isset($_POST['submit']))
{
$u_name=$_POST['u_name'];

$email=$_POST['email'];
$password=$_POST['password'];


$email_query="select * from add_user where email='$email'";
$query=mysqli_query($mysqli,$email_query);
$email_count= mysqli_num_rows($query);




if($email_count>0)
{
   echo'<script> alert("email already exist") </script>';


}
else{
    $result=mysqli_query($mysqli,"insert into add_user values('$u_name','$email','$password')");

    
    
   
   
        if($result){
            echo '<script> alert("Added sucessfully") </script>';
            header('location:admin_page.php');
        }
        else{
            echo'<script> alert("failed") </script>';
        }
}
}







?>
    
</body>
</html>