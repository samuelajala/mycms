<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>News Platform</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
  </head>
  <body>
      <div class="container">

        <div class="head">
          <a href="index.php"><img id="logo" src="images/logo.png" alt="logo"/></a>
          <img id="banner" src="images/ad_banner.png" alt="banner" />
        </div>
        <?php
        //include navbar
        include("includes/navbar.php");

        if(!isset($_GET['cat'])){
        //include post_content
        include("includes/search_post_content.php");
        }else {
          //including categories
        include("includes/get_post_categories.php");
        }


        //include sidebar
        include("includes/sidebar.php");


        //include footer
        include("includes/footer.php");
        ?>


  </body>
</html>
