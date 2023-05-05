<?php
  include("includes/database.php");

  if (isset($_GET['delete_cat'])) {

    $delete_id = $_GET['delete_cat'];

    $delete_post = "delete from categories where cat_id='$delete_id'";

    $run_delete = mysqli_query($con,$delete_post);

    echo "<script>alert('A category has been deleted')</script>";

    echo "<script>window.open('index.php?new_category','_self')</script>";
  }
?>
