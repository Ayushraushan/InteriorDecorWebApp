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
    <title>Interior Decor:Home</title>
    <script src="https://kit.fontawesome.com/e748bdee62.js" crossorigin="anonymous"></script>
    <style>
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
    <div class="heading">
        <h1 style="text-transform: capitalize; color: #14fff795;margin-left:50px;text-align: center; font-size: 60px;">interior decor</h1>
        <hr>
      
        <div class="mid">
            <img src="../images/home.jpg" alt="" id="home">
          <div>
              <h2 style="text-align:center;    text-align: center;
   
                font-size: 55px;
                  color: red; text-transform: capitalize;"> Hello <?php  echo $_SESSION['f_name'];    ?></h2>
            <h1 style="font-size: 80px; margin-right: 160px;" >welcome in <span style="text-transform: capitalize; font-size: 50px;" >interior decor</span> <hr> </h1>
            <p style="    margin-left: 31px;
            margin-right: 161px;
            text-align: justify;
            font-size: 21px;
            font-weight: bolder;
            color: azure;">Interior decorating is the art of decorating a residential home or commercial business according to a client's personal preferences and style. It includes selecting color schemes, flooring materials, furniture, artwork, and accessories. It transforms an area into an aesthetically pleasing and budget-friendly design.</p>
             <br><br><hr style="margin-left: 10px; margin-right: 150px;">
             <div id="connect">
               
                <ul style="justify-content:center; margin-top: 20px;">
                    <li><a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
               
            </div>
          </div>
         
        </div> 
        
    </div>
    <div class="des">
        <div>
            <h2 style="text-align:center; color:beige; border-bottom:2px solid hotpink"> BEDROOM</h2>
            <img src="../images/bedroom.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                        text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                     margin-bottom: 10px;">
                A bedroom should be a personal getaway, a sanctuary, which expresses your favorite colors, feelings, and
                collections. Learn the main rules to remember when decorating your bedroom.
            </p>
        </div>
        <div>
        <h2 style="text-align:center; color:beige; border-bottom:2px solid hotpink">Kitchen</h2>
            <img src="../images/kitchen.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                     text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                      margin-bottom: 10px;">
               Although a room where food is cooked is called a kitchen, the words cook and kitchen are so different that it is surprising to learn that they both come from the same source.
            </p>
        </div>
        <div>
        <h2 style="text-align:center; color:beige; border-bottom:2px solid hotpink"> Living-Room</h2>
            <img src="../images/living-room.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                     text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                     margin-bottom: 10px;">
            
Living rooms are usually one of the largest rooms of a house, located either in the middle of a house or in the front (where they're often called 'front rooms').
            </p>
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
        <div class="update">
            <h4>for updates:</h4>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p class="posi"><input type="Email" name="email"placeholder="Enter your email" style="width: 230px; height: 30px; border: none; outline: 2px solid gray; color: rgb(238, 232, 232); background: transparent;"></p>
             <p> <input type="submit" value="Submit"  name="submit" style="width: 80px; height: 20;"></p>
             </form>
             <br>
             <hr>
             <div id="connect">
                <h5>Social Media</h5>
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

if(isset($_POST['submit']))
{
  

$email=$_POST['email'];



$email_query="select * from home where email='$email'";
$query=mysqli_query($mysqli,$email_query);
$email_count= mysqli_num_rows($query);




if($email_count>0)
{
   echo'<script> alert("email already exist") </script>';


}
else{
    $result=mysqli_query($mysqli,"insert into home values('$email')");
   
        if($result){
            echo'<script> alert("Email Sent") </script>';
        }
        else{
            echo'<script> alert("failed") </script>';
        }
}
    

}





?>
    
    
</body>
</html>