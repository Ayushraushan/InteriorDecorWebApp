<?php
include("config.php");
$query= "select * from registration";
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
    <title>Registration Details</title>
    <style>
       
        th{
            border:1px solid black;
        }
        td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table style="width:50%; line-height:30px; border:1px solid black;margin-left:auto;
    margin-right: auto;">
        <tr><th colspan="6"><h2> Registration Details</h2></th></tr>
         <tr>
         <th>First Name</th>
         <th> Last Name</th>
         <th>Username</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Password</th>
         </tr>
         <?php
         while($rows=mysqli_fetch_assoc($data))
         {
             ?>
             <tr>
                 <td><?php echo $rows['f_name']; ?></td>
                 <td><?php echo $rows['l_name']; ?></td>
                 <td><?php echo $rows['u_name']; ?></td>
                 <td><?php echo $rows['email']; ?></td>
                 <td><?php echo $rows['phone']; ?></td>
                 <td><?php echo $rows['pass']; ?></td>
             </tr>
             <?php
         }
         ?>
    </table>
    
</body>
</html>