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
     $query = mysqli_query($connect, "SELECT `user_id`, `user_name`, `password`, `user_email` FROM `user_table` WHERE 1");

     if(!$username || !$password)
     {
         $error =  "Please type your login and password";
     }elseif($username != $query[`user_name`])
     {
         $error = "Wrong username";
     }elseif($password != $query['password'])
     {
         $error = "Wrong password";
     }else{
         $_SESSION['name'] = $query['user_name'];

         header("Location:/Crud");
     }
 }
?>


<?php if(isset($error)): ?>
      <div style="color:red; border: 1px solid red">
          <?= $error; ?>
      </div>
  <?php endif;
  print_r($query);
  ?>
