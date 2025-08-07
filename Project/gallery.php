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
    <title>Interior Decor:Gallery</title>
    <style>
    <?php 
   
    include("style.css");?>

    </style>
    <script src="https://kit.fontawesome.com/e748bdee62.js" crossorigin="anonymous"></script>
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
    <div class="pic">
        <div id="para">
        <img src="../images/bedroomm.webp" alt="404"><br>
        <div>
        <h1 style="color: antiquewhite;
            margin-left: 265px;
            margin-right: 225px;
            border-bottom: 2px solid rgb(207, 36, 36);
            height: 40px;
            font-size: 40px;">BED-ROOM </h1><br>
            <p style="text-align: justify;
            margin-left: 20px;
            margin-right: 30px;
            color: white;
            font-size: large;
            margin-top: 40px;">Even though the bedroom is a private space that will be seen by far fewer people than your living room or kitchen, it should be an equally stylish sanctuary. Whether you want a traditional design or an exotic retreat, you’ll find bedroom decorating ideas to create the room of your dreams in this collection of spaces from the archives of Architectural Digest. Best of all, you don’t need a complete remodel to bring new life to your bedroom. As these rooms prove, some well-placed art, bold wallpaper, or even a fresh coat of paint can make a space stand out.</p>
            </div>

         
    </div>
    <div id="para">
        <img src="../images/drawing.webp" alt=""><br>
        <div>
       <h1 style="color: antiquewhite;
            margin-left: 220px;
            margin-right: 155px;
            border-bottom: 2px solid rgb(207, 36, 36);
            height: 40px;
            font-size: 40px;">DRAWING-ROOM</h1>
            <p style="text-align: justify;
            margin-left: 20px;
            margin-right: 30px;
            color: white;
            font-size: large;
            margin-top: 65px;">Drawing rooms are spaces that are stepped into first when people visit a home. They define the character of the space and their design defines the feel and ambience. It is in the drawing-room from where the house gets a personality. It is therefore very crucial for drawing rooms to be designed and planned well, to echo the personality of the people drawing in the space and to be done in keeping with the rest of your home.</p>
            </div>
    </div>
    <div id="para">
        <img src="../images/kitchenn.jpg" alt="">
        <div>
        <h1 style="color: antiquewhite;
            margin-left: 250px;
            margin-right: 130px;
            border-bottom: 2px solid rgb(207, 36, 36);
            height: 40px;
            font-size: 40px;">KITCHEN-ROOM</h1>
            <p style="text-align: justify;
            margin-left: 20px;
            margin-right: 30px;
            color: white;
            font-size: large;
            margin-top: 95px;">Although a room where food is cooked is called a kitchen, the words cook and kitchen are so different that it is surprising to learn that they both come from the same source. Both words can be traced to the Latin verb coquere, meaning “to cook.” The connection between coquere and cook is easy to see, but kitchen has a more involved history. From the verb coquere came the later Latin noun coquina, meaning “a kitchen.” With some changes in pronunciation, coquina came into Old English as cycene. This became Middle English kichene and finally modern English kitchen</p>
            </div>
    </div>
    </div>
    <div style="background-color: azure; margin-top: 5px;">
        <h2 style="color:black; text-align: center; "> Our Bedroom Designs </h2>
        <img src="../images/bedroom.jpg" alt="" class="bedroom">
        <img src="../images/bedroom2.jpg" alt=""class="bedroom">
        <img src="../images/bedroom3.jpg" alt=""class="bedroom">
        <img src="../images/bedroom4.jpg" alt=""class="bedroom">

    </div>
    <div style="background-color: azure; margin-top: 5px;">
        <h2 style="color:black; text-align: center;"> Our Kitchen Designs </h2>
        <img src="../images/kitchen1.jpg" alt="" class="bedroom">
        <img src="../images/kitchen2.jpg" alt=""class="bedroom">
        <img src="../images/kitchen3.jpg" alt=""class="bedroom">
        <img src="../images/kitchen4.jpg" alt=""class="bedroom">

    </div>
    <div style="background-color: azure; margin-top: 5px;">
        <h2 style="color:black; text-align: center; "> Our Bathroom Designs </h2>
        <img src="../images/bathroom1.jpg" alt="" class="bedroom">
        <img src="../images/bathroom2.jpg" alt=""class="bedroom">
        <img src="../images/bathroom3.jpg" alt=""class="bedroom">
        <img src="../images/bathroom4.jpg" alt=""class="bedroom">

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