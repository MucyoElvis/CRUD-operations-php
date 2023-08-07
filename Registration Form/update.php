<?php
  include('config.php');
  if(isset($_POST['update'])){
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = $_POST['password'];
   $age = $_POST['age'];
   $status = $_POST['status'];
   $user_id = $_POST['user_id'];

   $sql="UPDATE `users` SET 
   `firstname`= '".$firstname."', `lastname`= '".$lastname."',
    `email`= '".$email."', `gender`= '".$gender."',`password`= '".$password."',`status`= '".$status."',`age`=".$age." WHERE `id`= ".$user_id;
  
   $result = mysqli_query($conn,$sql);

   if($result){
    echo 'Updated Successfully';
   }else{
    echo 'Error'.$sql.'<br>'.$conn->error; 
   }
  }
  if(isset($_GET['id'])){
   $user_id = $_GET['id'];

   $sql = "SELECT * FROM `users` WHERE `id` =".$user_id;
   $result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0){
    while($_row = $result -> fetch_assoc()){
     $firstname = $_row['firstname'];
     $lastname = $_row['lastname'];
     $email = $_row['email'];
     $gender = $_row['gender'];
     $password = $_row['password'];
     $id = $_row['id'];
     $age = $_row['age'];
     $status = $_row['status'];
    }
  }
    ?>


    <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./assets/bootstrap.min.css">
 <title>Registration Form</title>
</head>
<body>
<div class="container mt-5 pt-5">
    <h3 class="offset-5">Update Form</h3>
   <form action="update.php" method="POST">
     <div class="form-group col-4 offset-4">
      <label for="firstname">
       First Name
      </label>
      <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
      <input type="hidden" class="form-control" name="user_id" value="<?php echo $id; ?>">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="lastname">
       Last Name
      </label>
      <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="email">
       Email
      </label>
      <input type="email" class="form-control" name="email"  value="<?php echo $email; ?>">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="password">
       Password
      </label>
      <input type="text" class="form-control" name="password"  value="<?php echo $password; ?>">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="age">
       Age
      </label>
      <input type="number" class="form-control" name="age" value="<?php echo $age;?>">
     </div>


     <div class="form-group col-4 offset-4 pt-3">
     <label for="gender">
       Gender :
     </label>
      <br>
     <input type="radio" name="gender" value="male" <?php if($gender == 'male'){ echo "Checked";}?> > Male
      <input type="radio" name="gender" value="female" <?php if($gender == 'female'){ echo "Checked";}?> >Female
     </div>
     

     <div class="form-group col-4 offset-4 pt-3">
      <label for="age">
       Status
      </label>
      <select name="status" id="status">
        <option value="online" <?php if($status==='online'){ echo 'selected';}?> >Online</option>
        <option value="offline" <?php if($status==='offline'){ echo 'selected';}?> >Offline</option>
        <option value="blocked" <?php if($status==='blocked'){ echo 'selected';}?> >blocked</option>
        <option value="suspended" <?php if($status==='suspended'){ echo 'selected';}?> >suspended</option>
      </select>
     </div>
        <input type="submit" name="update" class="btn btn-lg btn-info mt-5 offset-5 col-2 text-center"> 
   </form> 

 </div>


<script src="./assets/bootstrap.min.js"></script>
</body>
</html>
    <?php
    // If the Id value is not valid return the user to view.php
      }else{
       header('Location:view.php');
      }
  
    ?>
 
