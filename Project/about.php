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
    <title>Interior Decor:About</title>
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
                        <a href="home.php">
                            <li>home</li>
                        </a>
                        <a href="about.php">
                            <li>about</li>
                        </a>
                        <a href="gallery.php">
                            <li>gallery</li>
                        </a>
                       
                        <a href="prior_project.php">
                            <li>pre_project</li>
                        </a>
                        <a href="upcoming_project.php">
                            <li>up_project</li>
                        </a>
                        <a href="our_coustomer.php">
                            <li>coustomer</li>
                        </a>
                        <a href="feedback.php">
                            <li>feedback</li>
                        </a>


                    </ul>

                </div>
                <div id="button">
                    <button class="button"><a href="contact.php">contact_us</a></button>
                    <button class="button"><a href="logout.php">logout</a></button>
                </div>
            </div>

        </nav>
    </header>
    <div style=" background: radial-gradient(ellipse at center, rgba(30,87,153,1) 0%,rgba(89,148,202,1) 62%,rgba(95,154,207,0.7) 68%,rgba(125,185,232,0) 100%);">
        <div style="background: radial-gradient(ellipse at center, rgb(228,245,252) 10%,rgb(191,232,249) 50%,rgb(42,176,237) 85%);">
            <h1 style="text-transform: capitalize; text-align: center; font-size: 50px;  font-family: 'Courier New', Courier, monospace;"> about</h1>
        </div>
        <hr style="height: 3px;color: rgb(7, 7, 7);">

        <div class="par">
            <img src="../images/about.jpg" alt="">
            <p class="paragrah">Every business has an origin story worth telling, and usually, one that justifies why
                you even do business and have clients.

                Some centennial enterprises have pages of content that can fit in this section, while startups can tell
                the story of how the company was born, its challenges, and its vision for the future.</p>
            <br>
            <span style="color: #d54a4a;
                  font-size: 32px;
                  margin-bottom: auto;
                  /* text-align: center; */
                  margin-left: 281px;
                  border-bottom: 2px solid;">Benifits</span> <br>
            <p class="paragrah"> Of course, you have a homepage and dedicated pages for your products, but summarizing
                your offerings on the About Us page is crucial to tie them in with brand values in your messaging.

                Highlight the benefits and showcase what you do (and why it is unique).</p>
            <span style="color: #d54a4a;
                  font-size: 32px;
                  margin-bottom: auto;
                  /* text-align: center; */
                  margin-left: 220px;
                  border-bottom: 2px solid;">Your Social proof</span>
            <p class="paragrah">Reviews, client logos, case studies, and results bring consistency to your About Us
                page. It’s what really proves what you are saying is real and the impact you can bring to future
                clients.

                With these components in mind, you will have a framework from which to build an engaging and unique
                About Us page.</p>
        </div>
    </div>
    <div class="des">
        <div>
            <img src="../images/bedroom.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                        text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                     margin-bottom: 10px;">
               Even though the bedroom is a private space that will be seen by far fewer people than your living room or kitchen, it should be an equally stylish sanctuary. Whether you want a traditional design or an exotic retreat, you’ll find bedroom decorating ideas to create the room of your dreams in this collection of spaces from the archives of Architectural Digest.
            </p>
        </div>
        <div>
            <img src="../images/kitchen.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                     text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                      margin-bottom: 10px;">
               Although a room where food is cooked is called a kitchen, the words cook and kitchen are so different that it is surprising to learn that they both come from the same source. Both words can be traced to the Latin verb coquere, meaning “to cook.” The connection between coquere and cook is easy to see, but kitchen has a more involved history. 
            </p>
        </div>
        <div>
            <img src="../images/living-room.jpg" alt="" style="border-radius: 20px; margin-top: 5px;">
            <p style="    width: 250px;
                     text-align: justify;
                     margin-left: 25px;
                     color: white;
                     font-size: 18px;
                     margin-top: 5px;
                     margin-bottom: 10px;">
               Living rooms are usually one of the largest rooms of a house, located either in the middle of a house or in the front (where they're often called 'front rooms'). The reason living rooms are more spacious is to accommodate large couches, TVs and entertainment centers, and other ornamental storage units
            </p>
        </div>
    </div>

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


</body>

</html>