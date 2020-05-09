<?php

$id=$_GET['id'];

$con=mysqli_connect("localhost","root","123123","test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql='delete from phones where id='.$id;

  mysqli_query($con,$sql);
  mysqli_close($con);


  header('Location: index.php');

?>