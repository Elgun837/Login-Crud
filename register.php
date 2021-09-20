<?php require "config.php"; ?>
<?php require_once "header.php"; ?>

<center>
<form class="form" action="" method="Post">
  <div  class="form-group">
    <input name="user_name" type="text" class="form-control" placeholder="Username">
  </div>
</div>
  <div  class="form-group">
    <input name="password" type="password" class="form-control" placeholder="password">
  </div>
  <div  class="form-group">
    <input name="email" type="email" class="form-control" placeholder="email">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>  
</center> 
<?php
session_start();
    if($_POST){
        $name = $_POST['user_name'];
        $password = $_POST['password'];
        $mail = $_POST['email'];
    $query = mysqli_query($connect, "INSERT INTO `user_table`(`user_name`, `password`, `email`) VALUES ('$name','$password','$mail')");

    if($query)
                {
                    echo "<center><h1>Successfully added!</h1></center><script>setTimeout(function(){ window.location.href = 'sign.php'; }, 5000)</script>";
                }else{
                    echo "<center><h1>Something wents wrong</h1></center>";
                }
            }


