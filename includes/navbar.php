<div class="navbar">
  <ul id="menu">
    <?php
      include("includes/database.php");

      $get_cat = "select * from categories";
      $run_cats = mysqli_query($con,$get_cat);

      //just to make it easier to get back to index page.
      echo "<li><a style='margin-left:20px;' href='index.php'>Home</a></li>";

      while ($cats_row=mysqli_fetch_array($run_cats)) {
        $cat_id = $cats_row['cat_id'];
        $cat_title = $cats_row['cat_title'];

        echo "
        <li><a href='index.php?cat=$cat_id'>$cat_title</a></li>
        ";
      }
    ?>
  </ul>
  <div id="form">
    <form class="" action="results.php" method="get" enctype="multipart/form-data">
      <input type="text" name="search_query" Placeholder="Type your search" />
      <input type="submit" name="search" value="Search Now"/>
    </form>
  </div>
</div>
