<?php
/**
 * @file
 * teachings.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function teachings_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function teachings_node_info() {
  $items = array(
    'teaching' => array(
      'name' => t('Teaching'),
      'base' => 'node_content',
      'description' => t('Upload a teaching to the site.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
