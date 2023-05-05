<?php
  include("includes/database.php");

  if (isset($_GET['status'])) {

    $comment_id = $_GET['status'];

    $select = "select * from comments where comment_id='$comment_id'";

    $select_query = mysqli_query($con,$select);
    $select_row = mysqli_fetch_array($select_query);

    $comment_status = $select_row['status'];

    if ($comment_status == 'approve') {
          $update_status = "update comments set status = 'unapprove' where comment_id='$comment_id'";

          $run_delete = mysqli_query($con,$update_status);

          echo "<script>alert('Comment status unapproved')</script>";

          echo "<script>window.open('index.php?view_comments','_self')</script>";

    }else {
    $update_status = "update comments set status = 'approve' where comment_id='$comment_id'";

    $run_delete = mysqli_query($con,$update_status);

    echo "<script>alert('Comment status approved')</script>";

    echo "<script>window.open('index.php?view_comments','_self')</script>";
  }
  }
?>
