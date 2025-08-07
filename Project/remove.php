<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User</title>
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
        .admin{
            background: linear-gradient(to bottom, rgba(210,223,237,1) 0%,rgba(200,215,235,1) 26%,rgba(166,192,227,1) 38%,rgba(166,192,227,1) 38%,rgba(190,208,234,1) 51%,rgba(175,199,232,1) 62%,rgba(186,208,239,1) 75%,rgba(153,181,219,1) 88%,rgba(121,155,200,1) 100%); 
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
           
                <h2 >Remove User</h2>
                <div>
                
                
                    <label for="username">Username</label><br>
                <input type="text" name="username" placeholder="Enter Your username" required><br>
                <label for="password">Password</label><br>
                <input type="pass" name="password" placeholder="Enter Your Password" required><br>
                <button class="btnnn" name="submit" > Remove </button>
                </div>
                </form>
            </div>


            <?php

if(isset($_POST['submit']))
{


$username=$_POST['username'];
$password=$_POST['password'];

$user_search= "select * from add_user where u_name='$username' ";
$e_query = mysqli_query($mysqli,$user_search);
$email_count=mysqli_num_rows($e_query);
if($email_count){



$data=mysqli_query ($mysqli,"delete from add_user where u_name='$username'");
// $result=mysqli_query($mysqli,$data);

// $query=mysqli_query($mysqli,$email_query);
// $email_count= mysqli_num_rows($query);

 
?>
<script>
    alert("Remove successful");
    location.replace("admin_page.php");
</script>
<?php

        
    }
else{
    echo'<script> alert("not exist") </script>';

}


}




?>
    
</body>
</html>