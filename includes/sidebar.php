<div class="sidebar">
  <div id="sidebar_title">Subscribe via Email</div>
  <!--for email subscribtion box, we can go to google feedburner. this is a tool that you can freely use to create and account to your website. this will automatically allow people coming to your website to freely subscribe to your content. whenever a new post is created or your website is updated.
All to do is create an account using
feedburner.google.com/fb/a/myfeeds?(use google search to get the rest)
after creating a account, a code to use for creating the subscriber input will be given to me.
the one used here is just from the tutorial.-->
  <div class="">

    <form style="padding:3px; text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=OnlineComputerTeacherkarachi', 'popupwindow',scrollbars=yes,width=550,height=520); return true"><p>Enter your email address:</p><p><input type="text" name="email" style="width:140px"></p><input type="hidden" name="uri" value="OnlineComputerTeacherkarachi"><input type="hidden" name="loc" value="en_US"><input type="submit" value="Subscribe"></p>
    </form>

  </div>

  <div ="sidebar_title">Fellow Us!</div>
    <div id="social">
      <img src="images/facebook.png" alt="facebook" width="50" height="50"/>
      <img src="images/twitter.png" alt="twitter" width="50" height="50"/>
      <img src="images/google.png" alt="google" width="50" height="50"/>
      <img src="images/pin.png" alt="pin" width="50" height="50"/>
    </div>

  <div id="sidebar_title">Recent Stories</div>
  <?php
    $get_posts = "SELECT * FROM posts ORDER BY 1 DESC LIMIT 0,5";

    $run_posts = mysqli_query($con,$get_posts);

    while ($row_posts = mysqli_fetch_array($run_posts)) {

      $post_id = $row_posts['post_id'];
      $post_title = $row_posts['post_title'];
      $post_image = $row_posts['post_image'];

      echo"
        <h2><a href='details.php?post=$post_id'>$post_title</a></h2>
        <img src='admin/post_images/$post_image' width='100' height='100' />
      ";
    }


  ?>

</div>
