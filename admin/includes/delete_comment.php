<?php
  include("includes/database.php");

  if (isset($_GET['delete_comment'])) {

    $delete_id = $_GET['delete_comment'];

    $delete_comment = "delete from comments where comment_id='$delete_id'";

    $run_delete = mysqli_query($con,$delete_comment);

    echo "<script>alert('A comment has been deleted')</script>";

    echo "<script>window.open('index.php?view_comments','_self')</script>";
  }
?>
