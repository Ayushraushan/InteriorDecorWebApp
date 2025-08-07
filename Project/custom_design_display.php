<?php
include("config.php");
$query= "select * from custom";
$data= mysqli_query($mysqli, $query);
$total= mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);

// echo $result['f_name']." ".$result['l_name']." ".$result['u_name']." ".$result['email']." ". $result['phone']." ".$result['pass'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom_Design</title>
    <style>
       
        th{
            border:1px solid black;
        }
        td{
            border:1px solid black;
        }
        img{
            width:200px;
            height:150px;
        }
    </style>
</head>
<body>
    <table style="width:50%; line-height:30px; border:1px solid black;margin-left:auto;
    margin-right: auto;">
        <tr><th colspan="7"><h2> Custom Design</h2></th></tr>
         <tr>
         <th>Name</th>
        
         <th>Phone</th>
         <th>Kitchen</th>
         <th>Bedroom</th>
         <th>Drawing-room</th>
         <th>Curtain</th>
         <th>Color</th>
         </tr>
         <?php
         while($rows=mysqli_fetch_assoc($data))
         {
             ?>
             <tr>
                 <td><?php echo $rows['name']; ?></td>
                 <td><?php echo $rows['phone']; ?></td>
                 <td><img src="<?php echo ($rows['kitchen']); ?>" alt=""></td>
                 <td><img src="<?php echo ($rows['bedroom']); ?>" alt=""></td>
                 <td><img src="<?php echo ($rows['drawingroom']); ?>" alt=""></td>
                 <td><img src="<?php echo ($rows['curtain']); ?>" alt=""></td>
    
                 <td><?php echo $rows['color']; ?></td>
                
                 
             </tr>
             <?php
         }
         ?>
    </table>
    
</body>
</html>