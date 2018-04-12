<?php

/**
 * @author Semyon Dragunov <sam.dragunov@gmail.com>
 * https://github.com/SemyonDragunov
 */

function template_preprocess_sl7_social_share__default(&$variables) {
  $variables['methods_list'] = sl7_social_share_get_methods();
  $variables['methods'] = variable_get('sl7_social_share_method_access');
  if (!isset($variables['methods']) || empty($variables['methods'])) {
    $variables['methods'] = array_keys($variables['methods_list']);
  }
  $variables['theme_name'] = variable_get('sl7_social_share_theme');
  $variables['theme_settings'] = variable_get('sl7_social_share_theme_settings');
  $variables['social_settings'] = variable_get('sl7_social_share_settings');
}