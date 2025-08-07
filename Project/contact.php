


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
    <title>Interior Decor:Contact</title>
    <script src="https://kit.fontawesome.com/e748bdee62.js" crossorigin="anonymous"></script>
    <style>
        form{
            margin-top:90px;
        }
    <?php 
   
    include("style.css");?>

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
    <div  class="bg">
        
    <div class="main">
    <div class="leftside">
        <h1>CONTACT </h1>
        <hr>
        <P>LTurn your home into an attractive piece of art with HomeLane’s end-to-end interiors. Co-create designs with a dedicated interior designer in your budget and style. Designs as per Budget.3D Modelling of Designs. Customized Designs.</P>
  
        <form action="#"  method="post">
            <!-- <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Type your name"  required><br> -->
            <!-- <label for="email">E-mail</label><br>
            <input type="email" name="email" placeholder="Enter your E-mail" required><br> -->
            <!-- <label for="contact">Contact number</label><br>
            <input type="tel" name="contact" placeholder="Phone number" required><br> -->
            <label for="message">Messege</label><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message" required></textarea>
            <button class="btnn" name="register">SEND MESSAGE </button> <br>
            <h3 style="margin-left:40px">Custom Your Design <a href="custom_design.php">Click here</a></h3>

           
          
        </form>
    </div>
    <div class="img">
        <img src="../images/download (1).jpg" alt="">
        <hr>
        <div>
            <p class="para">
               FOR MORE ENQUIRY CALL: <br><br>
                  <span class="space">762-992-4563</span>  <br> <br>
            </p>
            <p class="para">
                OR YOU CAN VISIT US AT: <br><br>
                <span >4885 WILSON STREET
                    VICTORVILLE, CA 92392</span>
            </p>
            <p class="para"> 
                OR JUST EMAIL US : <br><br>
                <span > info@carvedcreations.com</span>

            </p>
            
        </div>
    </div>
</div>
</div>
<footer class="foot">
    <div class="visit">
        <div>
        <p><h4>visit our company</h4></p>
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
    <p > 
        
        <ul>
        <a href="gallery.php"><li>gallery</li></a>
        <a href="prior_project.php"><li>pre_project</li></a>
        <a href="our_coustomer.php"><li>coustomer</li></a>
       
    </ul>
    <hr style="margin-top:40px;"> 
    </p>
    <h5 style="margin-top: 10px;">Feedback</h5>
    <a href="feedback.php"> <img src="../images/feedback.jpg" alt="" class="feedback"></a>

</div>
<hr style=" margin-top: 10px; margin-bottom: 10px;">
  
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


if(isset($_POST['register']))
{
$name=$_SESSION['f_name'];

$email =$_SESSION['email'];

$contact=$_SESSION['phone'];
$message= $_POST['message'];










    $result=mysqli_query($mysqli,"insert into contact values('$name','$email','$contact','$message')");
   
        if($result){
            echo'<script> alert("sent sucessfully") </script> ';
        }
        else{
            echo"failed";
        }

    

}





?>

</body>
</html>