<?php
/**
 * @file
 * sermons.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function sermons_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function sermons_node_info() {
  $items = array(
    'sermon' => array(
      'name' => t('Sermon'),
      'base' => 'node_content',
      'description' => t('Upload a sermon to the site.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
