<?php
include("config.php");
$query= "select * from home ";
$data= mysqli_query($mysqli, $query);
$total= mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);

// echo $result['name']." ". $result['email']." ". $result['star'];


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
       th{
           border:1px solid black;
       }
       td{
           border:1px solid black;
           text-align:center;
       }
   </style>
</head>
<body>
<table style="width:50%; line-height:30px; border:1px solid black;margin-left:auto;
    margin-right: auto;">
        <tr><th colspan="6"><h2>Update</h2></th></tr>
         <tr>
        
         
         <th>Email</th>
         
         
         </tr>
         <?php
         while($rows=mysqli_fetch_assoc($data))
         {
             ?>
             <tr>
                
                
                 <td><?php echo $rows['email']; ?></td>
               
                 
             </tr>
             <?php
         }
         ?>
    </table>
    
</body>
</html>