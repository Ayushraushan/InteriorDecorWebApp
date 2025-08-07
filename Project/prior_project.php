<?php
session_start();

if(!isset ($_SESSION['f_name'])){
 
    header('location:login.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Decor:Project</title>
 
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
    <div style="background-color: white;">
        <h2 style="text-align: center;font-size: 30px;  background: radial-gradient(ellipse at center, rgb(228,245,252) 10%,rgb(191,232,249) 50%,rgb(42,176,237) 85%) ;  font-family: 'Courier New', Courier, monospace;font-weight: bold;">Antilia</h2>

        <div class="antilia">
        <img src="../images/antilia.jpg" alt="" class="anti">
        <p>
            The luxe 27-storey cantilevered Ambani house is spread over 4,00,000 sq ft in Mumbai, a city that is notorious for space issues making it one of the most exorbitantly-priced housing markets in the world.
            The construction for Ambani house Antilia started in 2004 and continued rigorously for seven years till 2010.
            Antilia is the second most-expensive billionaire home in the world. Known to be the most valuable property after Buckingham Palace, the abode of the UK royal family, Antilia was valued at over USD 2.2 billion by property surveyors in 2020. While there are no clear estimates about it, it is often reported in the media that the maintenance work at Antilia requires an expenditure of Rs 2.5 crores per month.
        </p>
    </div>
    </div>
    <div style="background: linear-gradient(#ABE5E6,#7062F0);">
        <h2 style="text-align: center;font-size: 30px; background:linear-gradient(#30496B,#30BBD2) ; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ; font-weight: bold;">Interior of Antilia</h2>
        <img src="../images/antilia_interior.jpg" alt="" class="interior">
        <p class="inte">
            The building boasts of amenities such as three helipads, air traffic control, a ballroom, terrace gardens, swimming pool, spa, health centre, a temple, and a snow room that spits out snowflakes from the walls. Mukesh Ambani's son Akash Ambani's wife Shloka Mehta-Ambani features in this picture, shot inside Antilia.
        </p>

    </div>
    <div id="inte">
        <div>
        <h2 style="text-align: center; color: white;">Bed-Room</h2>
        <img src="../images/antilia_bedroom.jpg" alt="">
    </div>
        <div>
        <h2 style="text-align: center; color: white;">Kitchen</h2>
        <img src="../images/antilia_kitchen.jpg" alt="">
    </div>
        <div>
        <h2 style="text-align: center; color: white;">Guest-Room</h2>
        <img src="../images/antilia1.jpg" alt="">
    </div>
        <div>
        <h2 style="text-align: center; color: white;">Drawing-Room</h2>
        <img src="../images/guest.jpg" alt="">
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

    
</body>
</html>