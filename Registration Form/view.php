<?php
 include('config.php');
$msg ='';
$id=0;
if(isset($_GET['id'])){
  $id=$_GET['id'];

}
if(isset($_GET['msg'])){
  $msg=$_GET['msg'];
}else{
  $msg='Welcome to list of users';
}
$sql = 'SELECT * FROM users';
$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>View</title>
 <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <div class="alert alert-info">
      <center>   <?=$msg?></center>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <h2>Users</h2>
    <div class="row">
<div class="col-12">
    <table class="table table-hovered table-stripped">
      <thead>
       <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Action</th>
       </tr>
      </thead>
      <tbody>
        <?php
         if(mysqli_num_rows($result)> 0){
          while($row = $result->fetch_assoc()){
         
        ?>


            <tr>
              <td> <?php echo $row['id'];?></td>
              <td> <?php echo $row['firstname'];?></td>
              <td> <?php echo $row['lastname'];?></td>
              <td> <?php echo $row['email'];?></td>
              <td> <?php echo $row['gender'];?></td>
              <td> <?php echo $row['status'];?></td>


              <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">
             Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">
             Delete</a></td>
            </tr>
            
            <?php
                 }
              }    

            ?>
      </tbody>
    </table>
    </div>
    </div>
   </div>

   <div class="container mt-5 pt-5">
    <h3 class="offset-5">Add New User</h3>
   <?php include('form.php');?> 
 </div>
<script src="./assets/bootstrap.min.js"></script>
</body>
</html>