<?php

/**
 * Implements hook_sl7_social_share_theme().
 *
 * Инициирование типа дизайна иконок и прочих настроек.
 *
 * title - Название.
 * theme - Шаблон описанный в hook_theme.
 * settings - Не обязательно. Форма с настройками. По Form API, но единственный аргумент $default_value,
 * в нём передаются параметры по умолчанию.
 * @see sl7_social_share_theme_default_setting().
 * img - Изображение для превью.
 * css - Не обязательно. CSS файл.
 */
function hook_sl7_social_share_theme() {
	
	$themes['sl7_default'] = array(
		'title' => 'Стандартный',
		'theme' => 'sl7_social_share__default',
		'settings' => 'sl7_social_share_theme_default_setting',
		'css' => drupal_get_path('module', 'sl7_social_share') . '/css/sl7_social_share__default.css',
		'img' => drupal_get_path('module', 'sl7_social_share') . '/img/sl7_social_share__default.png',
	);
	
	return $themes;
}