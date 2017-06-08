<div class="panel margin10">
    <div class="heading">
        <span class="title">Support inbox</span>
    </div>
    <div class="content">
      <?php if (empty($userswitch[$user_key]['dash_supportinbox'])) { ?>
        <div class="padding20">You helped everyone! :)</div>
      <?php } ?>
      <div class="listview-outlook" data-role="listview">
        <?php foreach ($userswitch[$user_key]['dash_supportinbox'] as $item) { ?>
          <div class="list">
              <div class="list-content">
                <div class="list_meta">
                  <img src="https://placehold.it/78" data-format='cycle'>
                  <span class="list-remark margin10 no-margin-left no-margin-right"><?php echo $item['method']?></span>
                </div>
                <div class="list_info">
                  <span class="list-title"><?php echo $item['name']?></span>
                  <div class="list-subtitle"><?php echo $item['message']?></div>
                  <div class="split-button">
                      <button class="button"><?php echo $item['actions']?></button>
                      <button class="split dropdown-toggle"></button>
                      <ul class="split-content d-menu" data-role="dropdown">
                          <li><a href="#">Reply</a></li>
                      </ul>
                  </div>
                  <div class="list-remark comment support" style="display:none;">
                    <div class="input-control textarea">
                      <textarea></textarea>
                    </div>
                    <div class="button">Verzenden</div>
                  </div>
                </div>
              </div>
          </div>
          <?php } ?>
      </div>
    </div>
</div>
