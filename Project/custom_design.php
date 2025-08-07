<?php
include("config.php");
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
    <style>
        body{
           background:radial-gradient(ellipse at center, rgb(228,245,252) 10%,rgb(191,232,249) 50%,rgb(42,176,237) 85%);
        }
        *{
            margin: 0;
            padding: 0;
        }
        div{
            height: 95vh;
            width: 40%;
            background-color: wheat;
            margin-left: 430px;
            margin-top: 30px;
        }
        h2{
            text-align: center;
            border-bottom: 1px solid gray;
            border-radius: 10px;
            font-weight: bold;
            color: coral;
        }
        label{
            font-size: 20px;
    margin-left: 115px;
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;

        }
        input{
            margin-top: 5px;
    margin-bottom: 10px;
    width: 250px;
    height: 35px;
    margin-left: 117px;
        }
      button{
        margin-left: 220px;
    width: 80px;
    height: 36px;
    background-color: orange;
      }

    </style>
</head>
<body>
    <div>
        <h2>Coustom Designing Form</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <!-- <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Enter your full name" required><br>
        <label for="phone">Contact</label><br>
        <input type="tel" name="phone" placeholder="Enter your contact number" required><br> -->
        <label for="kitchen">Upload kitchen design</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file" name="kitchen" ><br>
        <label for="bedroom">Upload bedroom design</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file" name="bedroom"><br>
        <label for="drawing-room">Upload drawing-room design</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file" name="drawingroom" ><br>
        <label for="curtain">Upload curtain design</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file" name="curtain"><br>
        <label for="color">Select wall color</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="color" name="color" ><br>
        <button name="send">Submit</button>
        
        
    </form>
</div>




<?php

if(isset($_POST['send']))
{
    $name=$_SESSION['f_name'];


    
    $phone=$_SESSION['phone'];

// $kitchen=$_FILES['kitchen'];
// $bedroom= $_FILES['bedroom'];
// $drawingroom=$_FILES['drawingroom'];
// $curtain=$_FILES["curtain"];
$color=$_POST['color'];
$location="upload/";
 
// print_r($kitchen);
// print_r($bedroom);
// print_r($curtain);
// print_r($color);
$filename1=$_FILES['kitchen']['name'];
$filepath1=$_FILES['kitchen']['tmp_name'];
//$fileerror1=$kitchen['error'];
$filename2=$_FILES['bedroom']['name'];
$filepath2=$_FILES['bedroom']['tmp_name'];
//$fileerror2=$bedroom['error'];
$filename3=$_FILES['drawingroom']['name'];
$filepath3=$_FILES['drawingroom']['tmp_name'];
//$fileerror3=$drawingroom['error'];
$filename4=$_FILES['curtain']['name'];
$filepath4=$_FILES['curtain']['tmp_name'];
//$fileerror4=$curtain['error'];
// $data=[];
// $data=[$filename1, $filename2, $filename3, $filename4];
// print_r($data);
// $filename=[];
// $filename=[$filename1, $filename2, $filename3, $filename4];
// $filepath=[];
// $filepath=[$filepath1, $filepath2, $filepath3, $filepath4];
// if($data == 0){
//     $destfile = 'upload/'.$filename;
//     echo $destfile;
// }
 $image1="upload/".$filename1;
 $image2="upload/".$filename2;
 $image3="upload/".$filename3;
 $image4="upload/".$filename4;
 $query= "insert into custom(name, phone,kitchen,bedroom,drawingroom,curtain, color) values('$name', '$phone','$image1','$image2','$image3','$image4','$color')";
$fire=mysqli_query($mysqli,$query);
if($fire){
    move_uploaded_file($filepath1, $location.$filename1);
    move_uploaded_file($filepath2, $location.$filename2);
    move_uploaded_file($filepath3, $location.$filename3);
    move_uploaded_file($filepath4, $location.$filename4);
    ?>
         <script>
             alert("successful");
             location.replace("contact.php");
         </script>
         <?php
    // header('location:contact.php');
}
else{
    echo"failed";
}









    // $result=mysqli_query($mysqli,"insert into contact values('$name','$email','$contact','$message')");
   
    //     if($result){
    //         echo'<script> alert("sent sucessfully") </script> ';
    //     }
    //     else{
    //         echo"failed";
    //     }

    

}





?>
</body>
</html>