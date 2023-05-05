
<div class="post_area">
  <?php

    if (isset($_GET['search'])) {

      $get_query = $_GET['search_query'];

      if ($get_query=='') {
        echo "<script>alert('please write a keyword')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        exit();
      }

    $get_posts = "SELECT * FROM posts where post_keywords like '%$get_query%'";

    $run_posts = mysqli_query($con,$get_posts);

            if(mysqli_num_rows($run_posts)==0){
            echo "<script>alert('Key words not found.')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
          }else{

          while ($row_posts = mysqli_fetch_array($run_posts)) {

            $post_id = $row_posts['post_id'];
            $post_title = $row_posts['post_title'];
            $post_date = $row_posts['post_date'];
            $post_author = $row_posts['post_author'];
            $post_image = $row_posts['post_image'];
            //we'll use the substr to reduce the number of characters that will be displayed. the below will display from 0 to 300 characters.
            $post_content = substr($row_posts['post_content'],0,300);

            $post_new_id = $post_id;

            $get_comments = "select * from comments where post_id='$post_new_id' AND status='approve'";

            $run_comments = mysqli_query($con,$get_comments);

            $count = mysqli_num_rows($run_comments);

              echo"
                <h2><a id='content_title' href='details.php?post=$post_id'>$post_title</a></h2>
                <span><i>Posted by </i><b>$post_author</b></span><span><i>on </i><b>$post_date</b></span><span style='color:brown'><b>Comments ($count)</b></span>
                <img src='admin/post_images/$post_image' width='100' height='100' />
                <p>$post_content <a id='read_more_link' href='details.php?post=$post_id'>Read More</a></p>
              ";
            }
}
}

  ?>
</div>
