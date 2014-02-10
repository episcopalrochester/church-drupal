<?php
/**
 * @file
 * upcoming_events.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function upcoming_events_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function upcoming_events_node_info() {
  $items = array(
    'upcoming_event' => array(
      'name' => t('Upcoming Event'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Event Name'),
      'help' => '',
    ),
  );
  return $items;
}
