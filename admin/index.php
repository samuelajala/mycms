<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css" media="all" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="wrapper">

      <a href="index.php"><div class="header"></div></a>
      <div class="left">
        <h3 style="padding:5px;">Manage Content</h3>
        <a href="index.php?insert_post">Insert New Post</a>
        <a href="index.php?view_posts">View all Posts</a>
        <a href="index.php?new_category">View / Add Category</a>
        <a href="index.php?view_comments">View all Comments</a>
        <a href="index.php?logout">Admin Logout</a>
      </div>
      <div class="right">
        <?php
          include("includes/database.php");

          $select_pending ="SELECT * FROM comments where status='unapprove'";

          $pending_query= mysqli_query($con,$select_pending);

          $pending_count = mysqli_num_rows($pending_query);

        ?>
          <span style="padding:5px; margin:5px;"><strong>To do Tasks: </strong><span style="color:red; padding:5px; margin:5px;"><a style="text-decoration:none; color:#247da7;"href="index.php?view_comments">Pending Comments(<?php echo $pending_count ?>)</a></span></span>

        <?php
          if (isset($_GET['insert_post'])) {
            include("includes/insert_post.php");
          }
          if (isset($_GET['view_posts'])) {
            include("includes/view_posts.php");
          }
          if (isset($_GET['delete_post'])) {
            include("includes/delete_post.php");
          }
          if (isset($_GET['delete_comment'])) {
            include("includes/delete_comment.php");
          }
          if (isset($_GET['delete_cat'])) {
            include("includes/delete_cat.php");
          }
          if (isset($_GET['edit_post'])) {
            include("includes/edit_post.php");
          }
          if (isset($_GET['edit_cat'])) {
            include("includes/edit_cat.php");
          }
          if (isset($_GET['new_category'])) {
            include("includes/new_category.php");
          }
          if (isset($_GET['view_comments'])) {
            include("includes/view_comments.php");
          }
          if (isset($_GET['status'])) {
            include("includes/status_comment.php");
          }

        ?>
      </div>
    </div>
  </body>
</html>
