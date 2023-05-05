<div class="post_area">
  <?php

    if (isset($_GET['post'])) {
    $post_id = $_GET['post'];

    $get_posts = "SELECT * FROM posts where post_id='$post_id'";

    $run_posts = mysqli_query($con,$get_posts);

    while ($row_posts = mysqli_fetch_array($run_posts)) {
      $post_title = $row_posts['post_title'];
      $post_date = $row_posts['post_date'];
      $post_author = $row_posts['post_author'];
      $post_image = $row_posts['post_image'];
      $post_content = $row_posts['post_content'];
      $post_new_id = $post_id;

      $get_comments = "select * from comments where post_id='$post_new_id' AND status='approve'";

      $run_comments = mysqli_query($con,$get_comments);

      $count = mysqli_num_rows($run_comments);


      echo"
        <h2>$post_title</h2>
        <span><i>Posted by </i><b>$post_author</b></span><span><i>on </i><b>$post_date</b></span><span style='color:brown'><b>Comments ($count)</b></span>
        <img src='admin/post_images/$post_image' width='300' height='300' />
        <p>$post_content</p>
      ";
    }
  }



  //include comment form
  include("includes/comment_form.php");
  ?>


</div>
