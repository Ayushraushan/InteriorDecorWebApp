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
    <title>Interior Decor:Coustomer</title>
    <script src="https://kit.fontawesome.com/e748bdee62.js" crossorigin="anonymous"></script>
    <style>
    <?php 
   
    include("style.css");?>

    </style>
    <style>
        .mains{
            display: flex;
           
            justify-content: space-around;
            margin-top: 10PX;
        }
        .cous{
            width: 370px;
    height: 275px;
    margin-left: 100px;
    margin-right: 50px;
        }
        h3{
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
         border-bottom: 2px solid gray;
         margin-left: 20px;
         margin-right: 65px;
        }
        .riv{
            margin-top: 50px;
            margin-right: 50px;
            text-align: justify;
            font-weight: bold;
        }
        h1{
            text-align: center;
            background: radial-gradient(ellipse at center, rgb(228,245,252) 10%,rgb(191,232,249) 50%,rgb(42,176,237) 85%);
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
     <div style="background: linear-gradient( rgb(242,246,248) 0%,rgb(216,225,231) 50%,rgb(181,198,208) 51%,rgb(224,239,249) 100%);">
        <h1> Our Coustomer</h1>
    <div class="mains">
        <img src="../images/mukesh.webp" alt="" class="cous">
       <div>
        <h3 >MUKESH AMBANI </h3>
        <p class="riv"> Ambani lived only briefly in Yemen because his father decided to move back to India in 1958[8] to start a trading business that focused on spices and textiles. The latter was originally named "Vimal" but later changed to "Only Vimal".[9][10] His family lived in a modest two-bedroom apartment in Bhuleshwar, Mumbai until the 1970s.[11] The family's financial status slightly improved when they moved to India but Ambani still lived in a communal society, used public transportation, and never received an allowance.[12] Dhirubhai later purchased a 14-floor apartment block called 'Sea Wind' in Colaba, where, until recently, Ambani and his brother lived with their families on different floors.</p>
    </div>
    </div>
    <div class="mains">
        <img src="../images/neeta.jpg" alt="" class="cous">
        <div> <h3> NEETA AMBANI</h3>
        <p class="riv">Nita Mukesh Ambani (née Dalal, born 1 November 1963) is an Indian philanthropist.[3] She is the chairperson and founder of the Reliance Foundation, Dhirubhai Ambani International School and a director of Reliance Industries.[4][5] She is married to Reliance Industries chairman and managing director Mukesh Ambani.[6] With a family fortune estimated in excess of US$102 billion (October 2021), the Ambanis are among the richest in the world. She is also an art collector and owner of the Indian Premier League cricket team Mumbai Indians</p>
    </div>
</div>
    <div class="mains">
        <img src="../images/akash.jpg" alt="" class="cous">
        <div> <h3> AKASH AMBANI</h3>
        <p class="riv">Born on 23 October 1991, Akash Ambani’s age is 29 years as of 2021. He was born and brought up in one of the most popular business family from Mumbai, Maharashtra, India. He was born with a silver spoon as he was born into Ambani’s family which is the richest family in India.

He completed his schooling at Dhirubhai Ambani International School and Campion School in Mumbai. After that, he went to the United States and attended Brown University from where he completed a major in Economics.</p>
    </div>
</div>
    <div class="mains">
        <img src="../images/isha.jpg" alt="" class="cous">
        <div> <h3> ISHA AMBANI</h3>
        <p class="riv">Isha Ambani is the daughter of India’s richest business man Mukesh Ambani. Isha Ambani was born in Mumbai, Maharashtra, India in the year 1990.  She did his schooling at Dhirubhai Ambani Internationl School, Mumbai. Isha graduated in Psychology from Yale University. She had two brother named Anant Ambani and Akash Ambani.</p>
    </div>
</div>
    <div class="mains">
        <img src="../images/Shloka.webp" alt="" class="cous">
        <div> <h3> SHLOKA MEHTA</h3>
        <p class="riv">Shloka was born on 11th July 1990 in Mumbai to famous diamond merchant Russel Mehta, who is also owner and CEO of Rosy Blue Diamonds, and his wife Mona Mehta. She is a diamond baron famous Businesswoman. She has been a bright student at her school and is also a social worker.Shloka father name Russell Mehta, is a diamond marchent, and his mother name Mona Mehta, is the relative of 2018 PNB fraudster Nirav Modi. She has an elder brother, Viraj Mehta, and an elder sister, Diya Mehta.

</p>
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