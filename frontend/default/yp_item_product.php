<!doctype html>
<html>
<?php include($frontend_theme_path.'header.php');?>
<body>

<?php include($frontend_theme_data.'header_outer.php');?>

<?php include($frontend_theme_data.'error.php');?>  

<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="cold-md-12">
<?php include($frontend_theme_data.basename(__FILE__));?>
          </div> <!-- /col-md-12  -->
        </div> <!--/row -->
      </div> <!-- /top_content -->
    </div> <!-- /container -->
  </div> <!-- /top_cont_inner -->
</section>

<?php include($frontend_theme_data.'footer.php'); ?>
</body>
</html>
