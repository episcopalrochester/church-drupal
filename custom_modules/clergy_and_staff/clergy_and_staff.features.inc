<?php
/**
 * @file
 * clergy_and_staff.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function clergy_and_staff_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function clergy_and_staff_node_info() {
  $items = array(
    'staff_profile' => array(
      'name' => t('Staff Profile'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
