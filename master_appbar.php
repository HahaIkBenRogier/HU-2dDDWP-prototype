<div class="app-bar">
  <a class="app-bar-element">
      <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
      <div class="app-bar-drop-container"
              data-role="dropdown"
              data-toggle-element="#toggle-tiles-dropdown"
              data-no-close="false" style="width: 324px;">
          <div class="tile-container bg-white">
            <div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='<?php echo urlQuery("home",$user_key) ?>'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
              <div class="tile-content iconic">
                  <span class="icon mif-home"></span>
              </div>
              <span class="tile-label">Home</span>
            </div>

            <div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='<?php echo urlQuery("search",$user_key) ?>'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
              <div class="tile-content iconic">
                  <span class="icon mif-search"></span>
              </div>
              <span class="tile-label">Search</span>
            </div>

            <div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='<?php echo urlQuery("bugs",$user_key) ?>'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
              <div class="tile-content iconic">
                  <span class="icon mif-list"></span>
              </div>
              <span class="tile-label">Bugs/RFC</span>
            </div>

            <div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='<?php echo urlQuery("detail",$user_key) ?>'" style="opacity: 1; transform: scale(1); transition: 0.3s;">
              <div class="tile-content iconic">
                  <span class="icon mif-suitcase"></span>
              </div>
              <span class="tile-label">Bug details</span>
            </div>
          </div>
      </div>
  </a>
  <div class="app-bar-element place-right">
      <a class="dropdown-toggle fg-white"><?php echo $user_name ?></a>
      <div class="app-bar-drop-container bg-white fg-dark place-left" data-role="dropdown" data-no-close="true">
          <div class="padding20">
            <ul class="simple-list">
              <?php foreach ($userswitch as $k => $v) { ?>
              <li><a href="<?php echo urlQuery($page_key,$k) ?>"><?php echo $v['name'] ?></a></li>
              <?php } ?>
            </ul>
          </div>
      </div>
  </div>
</div>
