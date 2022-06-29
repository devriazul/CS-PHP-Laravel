<?php
  require_once('functions/function.php');

  $id=$_GET['d'];
  $del="DELETE FROM users WHERE user_id='$id'";
  $check=mysqli_query($con,$del);
  if($check){
    header('Location: all-user.php');
  }else{
    echo "Opps! Delete failed.";
  }
?>
