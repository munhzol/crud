<?php
    
    $cmd=$_GET['cmd'];

    $row = array(0,'','','');

    if($cmd=='edit'){
        $id=$_GET['id'];
        $con=mysqli_connect("localhost","root","123123","test");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql='select * from phones where id='.$id;
        
        $result_phones= mysqli_query($con,$sql);
        $row=$result_phones -> fetch_all();
        $row=$row[0];
        mysqli_close($con);
    }




?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="save.php" method="POST">
        <div>
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $row[1]; ?>">
        </div>
        <div>
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $row[2]; ?>">
        </div>
        <div>
            <label for="Phone">Phone</label>
            <input type="text" name="phone" id="Phone" value="<?php echo $row[3]; ?>">
        </div>
        
        <input type="hidden" name="cmd" value="<?php echo $cmd; ?>" >
        <input type="hidden" name="id" value="<?php echo $row[0]; ?>" >
        <button type="submit">Save</button>
    </form>


</body>
</html>