<?php
$types = array (
  'home' => array('Home', 'page_home.php'),
  'search' => array("Results for 'RFC'", 'page_results.php'),
  'bugs' => array("Bugs / RFC's", 'page_issuelog.php'),
  'detail' => array("Detailpagina #294 Hahaja", 'page_detail.php')
);

$get = $_GET['page'];

if (isset($get)) {
  $include = $types[$get][1];
  $name = $types[$get][0];
} else {
  $include = $types['home'][1];
  $name = $types['home'][0];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'master_appbar.php'; ?>
    <div class="container">
        <header class="margin20 no-margin-left no-margin-right no-margin-top">
          <?php
            if ($name === "Home") {
            } else {
          ?>
            <div class="clear-float">
                <a class="place-left" href="#" title="">
                    <h1><?php echo $name; ?></h1>
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
            <?php include $include; ?>
          </div>
          <div class="widgetbar">
            <?php include 'master_apps.php'; ?>
            <div class="widgetside">
              <div class="panel margin10">
                  <div class="heading">
                      <span class="title">For me</span>
                  </div>
                  <div class="content">
                      ... panel content ...
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
