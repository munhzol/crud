<?php


    $cmd=$_POST['cmd'];
    $id=$_POST['id'];


$con=mysqli_connect("localhost","root","123123","test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if($cmd=='add'){
    $sql='insert into phones values("0","'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['phone'].'") ';
    mysqli_query($con,$sql);
    $last_id = $con->insert_id;
  } else {
    $sql='update phones set firstname="'.$_POST['firstname'].'",lastname="'.$_POST['lastname'].'", phone="'.$_POST['phone'].'" where id="'.$id.'" ';
    mysqli_query($con,$sql);
    $last_id = $id;
  }

  mysqli_close($con);

  header('Location: view.php?id='.$last_id);

?>