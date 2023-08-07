<form action="create.php" method="POST">
     <div class="form-group col-4 offset-4">
      <label for="firstname">
       First Name
      </label>
      <input type="text" class="form-control" name="firstname">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="lastname">
       Last Name
      </label>
      <input type="text" class="form-control" name="lastname">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="email">
       Email
      </label>
      <input type="email" class="form-control" name="email">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="password">
       Password
      </label>
      <input type="text" class="form-control" name="password">
     </div>
     <div class="form-group col-4 offset-4 pt-3">
      <label for="age">
       Age
      </label>
      <input type="number" class="form-control" name="age">
     </div>

     <div class="form-group col-4 offset-4 pt-3">
      <label for="gender">
       Gender :
      </label><br>
      Male<input type="radio" name="gender" value="male" checked>
      Female<input type="radio" name="gender" value="female">
     </div>
     <div class="form-group col-12">

     <input type="submit" name="submit" class="btn btn-lg btn-info mt-5 offset-5 col-2 text-center">
     </div>
   </form> 