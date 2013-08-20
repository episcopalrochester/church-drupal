<?php
/**
 * @file
 * stewardship.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function stewardship_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function stewardship_node_info() {
  $items = array(
    'stewardship_story' => array(
      'name' => t('Stewardship Story'),
      'base' => 'node_content',
      'description' => t('A donor story - use video, image, audio and text.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
