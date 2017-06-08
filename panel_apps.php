<div class="files margin10">
  <?php foreach($userswitch[$user_key]['apps'] as $item) { ?>
  <div class="tile-small fg-white" data-role="tile" style="opacity: 1; transform: scale(1); transition: 0.3s; <?php if ($item[2]) {?> background-color: #<?php echo $item[2];?>; <?php } ?>">
      <div class="tile-content iconic" data-role="hint" data-hint-position="top" data-hint="<?php echo $item[1] ?>|">
          <img src="img/icon/<?php echo $item[0] ?>" class="icon" data-pin-nopin="true">
      </div>
  </div>
  <?php } ?>
</div>
