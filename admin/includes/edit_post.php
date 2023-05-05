<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Post</title>
    <!--using this to allow us format our text in the textarea insert post-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <style type="text/css">
      td, tr{padding: 0px; margin: 0px;}
    </style>
  </head>
  <body>

    <?php
      include("database.php");

      if (isset($_GET['edit_post'])) {
        $edit_id = $_GET['edit_post'];
        $select_post = "select * from posts where post_id='$edit_id'";
        $run_query = mysqli_query($con,$select_post);
        while($row_post=mysqli_fetch_array($run_query)){
          $post_id = $row_post['post_id'];
          $post_title = $row_post['post_title'];
          $post_cat = $row_post['category_id'];
          $post_author = $row_post['post_author'];
          $post_keywords = $row_post['post_keywords'];
          $post_image = $row_post['post_image'];
          $post_content = $row_post['post_content'];
        }
      }
    ?>

    <form class="" action="" method="post" enctype="multipart/form-data">
      <table width="795" align="center" bgcolor="#999999">
        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><h1>Update This Post</h1></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Title:</strong></td>
          <td><input type="text" name="post_title" size="60" value="<?php echo $post_title; ?>"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Category:</strong></td>
          <td>
            <select name="post_cat">
              <?php

                  $get_cat = "select * from categories where cat_id ='$post_cat'";
                  $run_cats = mysqli_query($con,$get_cat);

                  while ($cats_row=mysqli_fetch_array($run_cats)) {
                    $cat_id = $cats_row['cat_id'];
                    $cat_title = $cats_row['cat_title'];

                    echo "<option value='$cat_id'>$cat_title</option>";

                    $get_more_cats = "select * from categories";

                    $run_more_cats = mysqli_query($con,$get_more_cats);

                    while ($row_more_cats=mysqli_fetch_array($run_more_cats)) {
                      $cat_id = $row_more_cats['cat_id'];
                      $cat_title = $row_more_cats['cat_title'];

                      echo "<option value='$cat_id'>$cat_title</option>";

                    }
                  }
                ?>
            </select>
          </td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Author:</strong></td>
          <td><input type="text" name="post_author" size="60" value="<?php echo $post_author; ?>"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Keywords:</strong></td>
          <td><input type="text" name="post_keywords" size="60" value="<?php echo $post_keywords;?>"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Image:</strong></td>
          <td><input type="file" name="post_image" size="50"><img src="post_images/<?php echo $post_image; ?>" width="50" height="50" required="required"/></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Content:</strong></td>

          <td><textarea name="post_content" rows="15" cols="61"><?php echo $post_content;?></textarea></td>
          <!--use internet to watch tutorial 10. time 25mins upword and download tinymice-->
        </tr>

        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><input type="submit" name="update" value="Update Post"></td>
        </tr>
      </form>
    </table>
  </body>
</html>
<?php
  if (isset($_POST['update'])) {
    $update_id =   $edit_id;
    $post_title = $_POST['post_title'];
    $post_cat = $_POST['post_cat'];
    $post_author = $_POST['post_author'];
    $post_keywords = $_POST['post_keywords'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];
    $post_content = $_POST['post_content'];

if($post_title == '' OR $post_cat=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR $post_content==''){
      echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.open('index.php?view_posts','_self')</script>";

}elseif ($post_image=='') {

    $update_post = "update posts set category_id='$post_cat', post_title='$post_title',  post_author='$post_author', post_keywords='$post_keywords', post_content='$post_content' where post_id='$update_id'";
    $run_update = mysqli_query($con,$update_post);

    if ($run_update){

        echo "<script>alert('Post have been Updated!')</script>";
        echo "<script>window.open('index.php?view_posts','_self')</script>";
    }

}else {

  move_uploaded_file($post_image_tmp,"post_images/$post_image");

  $update_post = "update posts set category_id='$post_cat', post_title='$post_title',  post_author='$post_author', post_keywords='$post_keywords', post_image='$post_image', post_content='$post_content' where post_id='$update_id'";
  $run_update = mysqli_query($con,$update_post);

  if ($run_update){

      echo "<script>alert('Post have been Updated!')</script>";
      echo "<script>window.open('index.php?view_posts','_self')</script>";
  }
}
}


?>
