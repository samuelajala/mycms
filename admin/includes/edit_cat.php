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

      if (isset($_GET['edit_cat'])) {
      $cat_id = $_GET['edit_cat'];
        $select_cat = "SELECT * FROM categories WHERE cat_id='$cat_id'";
        $run_query = mysqli_query($con,$select_cat);
        while($row_cat=mysqli_fetch_array($run_query)){
          $cat_title = $row_cat['cat_title'];
        }
      }
    ?>

    <form class="" action="" method="post">
      <table width="795" align="center" bgcolor="#999999">
        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><h1>Update This Category</h1></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#FF6600"><strong>Category Name:</strong></td>
          <td><input type="text" name="cat_title" size="60" value="<?php echo $cat_title; ?>"></td>
        </tr>
        <tr bgcolor="#FF6600">
          <td colspan="6" align="center"><input type="submit" name="update_cat" value="Update Category"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
<?php
  if (isset($_POST['update_cat'])) {
  $cat_title = $_POST['cat_title'];

if($cat_title == ''){
      echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.open('index.php?new_category','_self')</script>";
}else {
  $update_cat = "UPDATE categories SET cat_title='$cat_title' WHERE cat_id='$cat_id'";
  $run_update = mysqli_query($con,$update_cat);

  if ($run_update){

    echo "<script>alert('Category have been Updated!')</script>";
    echo "<script>window.open('index.php?new_category','_self')</script>";
  }
}
}
