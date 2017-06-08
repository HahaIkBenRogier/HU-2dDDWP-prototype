<div class="main-menu-wrapper margin20 no-margin-left no-margin-right no-margin-top">
    <ul class="horizontal-menu" style="margin-left: -20px">
        <?php foreach($userswitch[$user_key]['mostusedcontacts'] as $item) {
          $popover = $item['fullname'];
          if ($item['extern']) {
            $popover .= " | ".$item['extern'];
          }
          if (!$item['extern']) {
            $popover .= " - ".$item['circle']." (";
            foreach ($item['role'] as $value) {
              $popover .= $value.", ";
            }
            $popover .= ")";
          }
          if ($item['notification']) {
            $popover .= " [".$item['notification']."]";
          }

        ?>

        <li><a href="#" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="bottom" data-popover-text="<?php echo $popover ?>" data-popover-background="bg-cyan" data-popover-color="fg-white"><?php echo $item['firstname'] ?></a></li>
        <?php } ?>
    </ul>
</div>
