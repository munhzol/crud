<?php

    $id=$_GET['id'];

  $con=mysqli_connect("localhost","root","123123","test");
  if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  
    $sql='select * from phones where id="'.$id.'"';
  
    $result_phones= mysqli_query($con,$sql);

    mysqli_close($con);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <table border="1">
        <?php 
            foreach($result_phones -> fetch_all() as $row){
                echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td> <td>
                <a href="edit.php?id='.$row[0].'">edit</a>
                <a href="delete.php?id='.$row[0].'">delete</a>
                </td></tr>';
            }

        ?>      
    </table>

    <p>
    <a href="index.php">Home</a>
    </p>

</body>
</html>