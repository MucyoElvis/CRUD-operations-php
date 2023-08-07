<?php
include('config.php');
if(isset($_GET['id'])){
  $user_id=$_GET['id'];
  $sql="DELETE FROM `users` WHERE `id`='$user_id'";

  $result=mysqli_query($conn,$sql);
  if($result){
    $msg='RECORD DELETED SUCCESSFULLY';
    header('location:view.php?msg='.$msg);
  }else{
    echo 'Error:'.$sql.'<br>'.mysqli_error($conn);
  }
}
?>