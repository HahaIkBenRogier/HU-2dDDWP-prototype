<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prototype</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'master_appbar.php'; ?>
    <div class="container">
        <header class="margin20 no-margin-left no-margin-right no-margin-top">
            <div class="clear-float">
                <a class="place-left" href="#" title="">
                    <h1>Homepagina (deze tekst komt niet op de home te staan)</h1>
                </a>
            </div>
            <?php include 'master_contacts.php'; ?>
        </header>
        <div class="clear-float">
          <div class="main">
            <div class="search margin10">
              <div class="input-control text big-input">
                  <input type="text">
              </div>
            </div>
            <?php include 'master_panels.php'; ?>
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
