<div class="sidebar">
  <!-- <?php dynamic_sidebar(sidebar);?> -->
  <div class="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ccm.png" width="100" height="100">
    <form action="" name="searchForm">
      <div class="searchFrame">
        <input type="text" id="search" name="searchBox" value="" class="inputBox"/>
        <div class="clearButton" onclick="ClearButton_Click()"></div>
      </div>
    </form>
    <div class="">
      <button type="button" onclick="location.href=''">大学</button>
    </div>
    <div class="">
      <button type="button" onclick="location.href=''">学生</button>
    </div>
    <div class="">
      <button type="button" onclick="location.href=''">地域</button>
    </div>
  </div>
  <div class="">
    <div class="">
      休講講義
    </div>
    <div class="">
      補講講義
    </div>
  </div>
  <div class="">
    <button type="button" name="button">Twitter</button>
  </div>
</div><!-- /sidebar -->
