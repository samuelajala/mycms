<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Post</title>
    <!--using this to allow us format our text in the textarea insert post-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <style type="text/css">
      td, tr{padding: 0px; margin: 0px;}
    </style>
  </head>
  <body>
    <form class="" action="index.php?insert_post" method="post" enctype="multipart/form-data">
      <table width="795" align="center" bgcolor="#999999">
        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><h1>Insert New Post</h1></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Title:</strong></td>
          <td><input type="text" name="post_title" size="60"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Category:</strong></td>
          <td>
            <select name="post_cat">
              <option value="null">Select a Category</option>
              <?php
                  include("includes/database.php");

                  $get_cat = "select * from categories";
                  $run_cats = mysqli_query($con,$get_cat);

                  while ($cats_row=mysqli_fetch_array($run_cats)) {
                    $cat_id = $cats_row['cat_id'];
                    $cat_title = $cats_row['cat_title'];

                    echo "<option value='$cat_id'>$cat_title</option>";
                  }
                ?>
            </select>
          </td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Author:</strong></td>
          <td><input type="text" name="post_author" size="60"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Keywords:</strong></td>
          <td><input type="text" name="post_keywords" size="60"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Image:</strong></td>
          <td><input type="file" name="post_image" size="50"></td>
        </tr>

        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Post Content:</strong></td>

          <td><textarea name="post_content" rows="15" cols="61"></textarea></td>
          <!--use internet to watch tutorial 10. time 25mins upword and download tinymice-->
        </tr>

        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><input type="submit" name="submit" value="Publish Now"></td>
        </tr>
      </form>
    </table>
  </body>
</html>
<?php
  if (isset($_POST['submit'])) {
    $post_title = $_POST['post_title'];
    $post_date = date('m-d-y');
    $post_cat = $_POST['post_cat'];
    $post_author = $_POST['post_author'];
    $post_keywords = $_POST['post_keywords'];
    $post_image = $_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];
    $post_content = $_POST['post_content'];

if($post_title == '' OR $post_cat=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR $post_image=='' OR $post_content==''){
  echo "<script>alert('Please fill in all the fields')</script>";
}else {

  move_uploaded_file($post_image_tmp,"post_images/$post_image");

  $insert_post = "insert into posts (category_id, post_title, post_date, post_author, post_keywords, post_image, post_content) values ('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";

  $run_post = mysqli_query($con,$insert_post);

  if ($run_post){

      echo "<script>alert('Post have been Published!')</script>";
      echo "<script>window.open('index.php?insert_post','_self')</script>";
  }
}
}


?>
