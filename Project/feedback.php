<?php
session_start();

if(!isset ($_SESSION['f_name'])){
 
    header('location:login.php');
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
    <title>Interior Decor:Feedback</title>
    <style>
    <?php 
   
    include("style.css");?>

    </style>
    <script src="https://kit.fontawesome.com/e748bdee62.js" crossorigin="anonymous"></script>
    <style>
        form{
            margin-left: 0px;
    margin-top: 0px;
        }
        form input{
            width: 10px;
    height: 15px;
    /* background: transparent; */
    border-bottom: none;
    border-top: none;
    border-left: none;
    border-right: none;
    /* margin-bottom: 10px; */
    /* padding-bottom: 10px; */
    color: black;
    text-align:center;
    font-size: 15px;
    letter-spacing: 0px;
    margin-top: 0px;
    font-family: sans-serif;

        }
        a:hover{
            color:blue;
           
        }
        .button:hover{
            
            background-color:gray;
        }
       a li:hover{
           color:blue;
           background-color:white;
           font-family:'Courier New', Courier, monospace;
       }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="navbaar">
                <div class="logo">
                    <img src="../images/download.png" alt="error" id="logo">
                    
                </div>
                <div class="icn">
                    <ul>
                        <a href="home.php"><li>home</li></a>
                        <a href="about.php"><li>about</li></a>
                        <a href="gallery.php"><li>gallery</li></a>
                       
                        <a href="prior_project.php"><li>pre_project</li></a>
                        <a href="upcoming_project.php"><li>up_project</li></a>
                        <a href="our_coustomer.php"><li>coustomer</li></a>
                        <a href="feedback.php"><li>feedback</li></a>
                        
                        
                    </ul>

                </div>
                <div id="button">
               <button class="button"><a href="contact.php">contact_us</a></button>
               <button class="button"><a href="logout.php">logout</a></button>
            </div>
            </div>

        </nav>
    </header>
    <form action="#" method="post" >
    <div id="feed">
        <div class="feed"  >
      
            <h2>Feedback</h2>
            
            <!-- <label for="name" class="nam" required>Name</label  ><br>
            <input type="text" name="name" placeholder="Enter your Name" class="name" required><br>
            <label for="email" class="nam" required>Email</label><br>
            <input type="email" name="email" placeholder="Enter Your E-mail" class="name"><br>
             -->
            <p class="str">NO. Of Stars</p>
            <input type="radio" id="one" name="star" class="radd" value="1" required>
            <label for="one" class="rad">1</label><br>
            <input type="radio" id="two" name="star" class="radd" value="2" required>
            <label for="two" class="rad">2</label><br>
            <input type="radio" id="three" name="star" class="radd" value="3" required>
            <label for="three" class="rad">3</label><br>
            <input type="radio" id="four" name="star" class="radd" value="4" required>
            <label for="four" class="rad">4</label><br>
            <input type="radio" id="five" name="star" class="radd" value="5" required> 
            <label for="five" class="rad">5</label><br>

            <button class="bttn" name="Send">SEND</button>
           
            
           
        
        </div>
    </div>
  
      
  </form>
    <footer class="foot">
        <div class="visit">
            <div>
                <p>
                <h4>visit our company</h4>
                </p>
                <p><img src="../images/company.jpg" alt="error"></p>
                <p class="posi">4885 WILSON STREET
                    VICTORVILLE, <br> CA 92392</p>
                <p class="posi">762-992-4563</p>
                <p> info@carvedcreations.com</p>
            </div>
        </div>
        <hr style=" margin-top: 10px; margin-bottom: 10px;">
        <div class="discription">
            <h4>description</h4>
            <p>

            <ul>
                <a href="gallery.php">
                    <li>gallery</li>
                </a>
                <a href="prior_project.php">
                    <li>pre_project</li>
                </a>
                <a href="our_coustomer.php">
                    <li>coustomer</li>
                </a>

            </ul>
            <hr style="margin-top:40px;">
            </p>
            <h5 style="margin-top: 10px;">Feedback</h5>
            <a href="feedback.php"> <img src="../images/feedback.jpg" alt="" class="feedback"></a>
        </div>
        <hr style=" margin-top: 10px; margin-bottom: 10px;">
        <div class="update">
           
            <div id="connect">
                <h5>Social Media</h5>
                <hr>
                <ul>
                <li><a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>

            </div>

        </div>

    </footer>
    <hr>
    <p class="footnote">
        © Copyright 2022. All Rights Reserved.
    </p>



    <?php

if(isset($_POST['Send']))
{
$name=$_SESSION['f_name'];

$email=$_SESSION['email'];

$star=$_POST['star'];

$result=mysqli_query($mysqli,"insert into feedback values('$name','$email','$star')");

if($result)
{
    
    echo'<script>alert("Feed-back sent Successfully ") </script>';
   



}
else{
    echo '<script>alert("Failed") </script>';
}


}




?>
    
</body>
</html>