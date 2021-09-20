<?php require 'config.php';?> 
<?php      require 'header.php';  ?>
  



<center>
<form class="form" action="" method="Post">
  <div  class="form-group">
    <input name="username" type="text" class="form-control" placeholder="Username">
  </div>
</div>
  <div  class="form-group">
    <input name="password" type="password" class="form-control" placeholder="password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign</button>
  <a href="Register.php">Sign up</a>
</form>  
</center>

<?php
 if(isset($_POST['submit']))
 {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $select = mysqli_query($connect, "SELECT * FROM `user_table`");
     $row = mysqli_fetch_assoc($select);

     if(!$username || !$password)
     {
         $error =  "Please type your login and password";
     }elseif($username != $row['user_name'])
     {
         $error = "Wrong username";
     }elseif($password != $row['password'])
     {
         $error = "Wrong password";
     }else{
         $_SESSION['name'] = $row['user_name'];

         header("Location:/Login-Crud/");
     }
 }
?>


<?php if(isset($error)): ?>
      <div style="color:red; border: 1px solid red">
          <?= $error; ?>
      </div>
  <?php endif;

  ?>
