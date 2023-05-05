<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      th,td,tr,table{padding: 0; margin: 0;}
      th{border-left: 2px solid #333; border-bottom: 3px solid #333;}
      td{border-left: 2px solid #999; border-bottom: 1px solid #333;}
      h2{padding: 10px;}
    </style>
  </head>
  <body>
    <table align="center" bgcolor="#FF9999" width="780">
      <tr>
        <td colspan="8" align="center" bgcolor="#0099CC"><h2>View all posts here</h2></td>
      </tr>
      <tr>
        <th>ID</th>
        <th>Comment</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
      <?php
        include("includes/database.php");
        $get_comments = "select * from comments";

        $run_comments = mysqli_query($con,$get_comments);
          $count_number = 1;
        while ($row_comments = mysqli_fetch_array($run_comments)) {

          $comment_id = $row_comments['comment_id'];
          $comment_text = $row_comments['comment_text'];
          $comment_name = $row_comments['comment_name'];
          $comment_email = $row_comments['comment_email'];
          $comment_status =  $row_comments['status'];
      ?>
      <tr style="font-size:12px; text-align:center;">
        <td><?php echo $count_number++; ?></td>
        <td><?php echo $comment_text; ?></td>
        <td><?php echo $comment_name; ?></td>
        <td><?php echo $comment_email; ?></td>
        <td><a href="index.php?status=<?php echo $comment_id; ?>"><?php echo $comment_status; ?></a></td>
        <td><a href="index.php?delete_comment=<?php echo $comment_id; ?>">Delete</a></td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
