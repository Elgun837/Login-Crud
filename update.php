<?php require 'config.php';?> 
<?php      require 'header.php'; 
$id = $_REQUEST['id'];
$select = mysqli_query($connect, "SELECT * FROM `author` WHERE id=$id");

$row = mysqli_fetch_assoc($select);
?> 
<center>
<form class="form" action="" method="Post">
  <div  class="form-group">
    <input name="country_name" type="text" class="form-control" placeholder="<?= $row['country'] ?>">
  </div>
</div>
  <div  class="form-group">
    <input name="capital_name" type="text" class="form-control" placeholder="<?= $row['capital'] ?>">
  </div>
  <div  class="form-group">
    <input name="Money_name" type="text" class="form-control" placeholder="<?= $row['Money'] ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>  
</center>
<?php
    if(isset($_POST['submit'])){
        $country_name= $_POST['country_name'];
        $capital_name=$_POST['capital_name'];
        $money_name=$_POST['Money_name'];
        $select = mysqli_query($connect, "SELECT * FROM `author` WHERE id=$id");


        $select= mysqli_query($connect,"UPDATE `author` SET * WHERE id=$id ");
        $row = mysqli_fetch_assoc($select);

        if($country_name){
          $row['country'] = $country_name; 
       }
       if($capital_name){
           $row['capital'] = $capital_name;
           
       }
       if($money_name){
           $row['Money'] = $money_name;
           
       }
        header("Location:/Login-Crud/");
    }

?>


