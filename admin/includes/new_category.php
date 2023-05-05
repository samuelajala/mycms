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
        <td colspan="8" align="center" bgcolor="#0099CC"><h2>View All Categories</h2></td>
      </tr>
      <tr>
        <th>Category ID</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
        include("includes/database.php");
        $get_cat = "select * from categories";

        $run_cat = mysqli_query($con,$get_cat);
          $count_number = 1;
        while ($row_cat = mysqli_fetch_array($run_cat)) {

          $cat_id = $row_cat['cat_id'];
          $cat_title = $row_cat['cat_title'];

        ?>
      <tr style="font-size:12px; text-align:center;">
        <td><?php echo $count_number++; ?></td>
        <td><?php echo $cat_title; ?></td>
        </td>
        <td><a href="index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a></td>
        <td><a href="index.php?delete_cat=<?php echo $cat_id; ?>">Delete</a></td>
      </tr>
    <?php } ?>

    <form class="" action="" method="post">
      <tr>
        <td colspan="8" align="center" bgcolor="#0099CC"><h3>Add New Category</h3></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#f99"><strong>Category Name:</strong></td>
        <td><input type="text" name="cat_title" size="60"></td>
      </tr>
      <tr bgcolor="#f99">
        <td colspan="6" align="center"><input type="submit" name="new_cat" value="Add Category"></td>
      </tr>
    </form>
    </table>
  </body>
</html>
<?php

  if (isset($_POST['new_cat'])) {
  $cat_title = $_POST['cat_title'];

if($cat_title == ''){
      echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.open('index.php?new_category','_self')</script>";
}else {
  $insert_cat = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
  $run_insert = mysqli_query($con,$insert_cat);

  if ($run_insert){

    echo "<script>alert('Category have been Added!')</script>";
    echo "<script>window.open('index.php?new_category','_self')</script>";
  }
}
}
?>
