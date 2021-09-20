<?php

require 'config.php';
require 'header.php';
$id = $_REQUEST['id'];

$delete = mysqli_query($connect, "DELETE FROM `author` WHERE id = $id");

if($delete)
{
    echo "<center><h1>Successfully deleted!</h1></center>";
}