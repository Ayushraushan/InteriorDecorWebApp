       <?php
session_start();

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
    <title>Login</title>
  
    <link rel="stylesheet" href="style.css">
    <style>
    <?php 
   
    include("style.css");?>

    </style>
 


  
</head>
<body style="background: linear-gradient(#EA8D8D, #A890FE);">
   <h2 style="text-align: center; margin-top: 5PX; color: gray;">C<span style="color:aqua; font-size: 26px;">O</span>NCEPT HOME</h2>
    <div class="login">
        <img src="../images/download.png" alt="" class="log">
    <div class="form" >
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2 style="width:190px">Log-in Here</h2>
        <input type="email" name="email" placeholder="Enter Your E-mail" style="width:210px" required>
        <input type="password" name="pass" placeholder="Enter Your Password" style="width:210px" required>
        <button class="btnnn" name="submit" style="width:210px"> log-in </button>
        <p class="link"> Don't Have An Account <br>
            <a href="sign_up.php" >Sign Up</a> Here
        </p>
        <button style="    width: 64px;
    height: 30px;
    background-color: gold;
    margin-left: 80px;
    margin-top: 10px;"><a href="admin.php" style="text-decoration:none; color: white; font-weight:bold;" target="_blank">Admin</a></button>
        </form>
    </div>
   
    <?php
  

if(isset($_POST['submit']))
{
   

$email=$_POST['email'];
$pass=$_POST['pass'];
$email_search= "select * from registration where email='$email' ";
$e_query = mysqli_query($mysqli,$email_search);
$email_count=mysqli_num_rows($e_query);









if($email_count)
{
  $email_pass= mysqli_fetch_assoc($e_query);
  $db_pass= $email_pass['pass'];
  $_SESSION['f_name']=$email_pass['f_name'];
  $_SESSION['email']=$email_pass['email'];
  $_SESSION['phone']=$email_pass['phone'];
  $pass_decode= password_verify($pass, $db_pass);
  if($pass_decode){
     
         ?>
         <script>
             alert("login successful");
             location.replace("home.php");
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