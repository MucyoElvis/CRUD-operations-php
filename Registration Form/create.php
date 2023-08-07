<?php
 include('config.php');

 if(isset($_POST['submit'])){
  //var_dump($_POST);
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
 
 $sql = "INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`,`gender`,`age`,`status`)
  VALUES ('".$first_name."','".$last_name."','".$email."','".$password."','".$gender."',".$age.",'offline')";

 $result = mysqli_query($conn,$sql);
//var_dump($result);
 if($result){
  $msg= 'NEW RECORD  CREATED SUCCESSFULLY';
  header('location:view.php?msg='.$msg.'&id='.mysqli_insert_id($conn));
 }else{ 
  echo 'Error:' . $sql .'<br>'.mysqli_error($conn);
 }
 //$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./assets/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <title>Registration Form</title>
</head>
<body>
  <div class="container mt-5 pt-5">
    <h3 class="offset-5">Registration Form</h3>
   <?php include('form.php');?> 
 </div>

 <script src="/assets/bootstrap.min.js"></script>
</body>
</html>