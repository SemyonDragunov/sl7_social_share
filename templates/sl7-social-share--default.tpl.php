<div id="social-share" data-theme="<?php print $theme_name; ?>" data-style="<?php print $theme_settings['side']; ?>">

  <?php foreach ($methods as $name): ?>
    <div class="<?php print $name; ?>" title="<?php print $methods_list[$name];?>"
      <?php if (isset($social_settings[$name])): ?>
        <?php foreach ($social_settings[$name] as $option => $value): ?>
          <?php if (!empty($value)): ?>
            data-<?php print $option;?>="<?php print $value; ?>"
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      ></div>
  <?php endforeach; ?>

  <div class="toggle"><span class="icon"></span></div>
</div>