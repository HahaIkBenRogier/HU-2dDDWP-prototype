<?php
include 'data_pages.php';
include 'data_users.php';
include 'setting_url.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'master_head.php'; ?>
  </head>
  <body>
    <?php include 'master_appbar.php'; ?>
    <div class="container">
        <header class="margin20 no-margin-left no-margin-right no-margin-top">
          <?php
            if ($page_name === "Home") {
            } else {
          ?>
            <div class="clear-float">
                <a class="place-left" href="#" title="">
                    <h1><?php echo $page_name; ?></h1>
                </a>
            </div>
            <?php };
            include 'master_contacts.php'; ?>
        </header>
        <div class="clear-float">
          <div class="main">
            <div class="search margin10">
              <div class="input-control text big-input">
                  <input type="text">
              </div>
            </div>
            <?php include $page_include; ?>
          </div>
          <div class="widgetbar">
            <?php include 'panel_apps.php'; ?>
            <div class="widgetside">
              <?php include 'panel_clippy.php'; ?>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
