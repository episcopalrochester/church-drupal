<?php
/**
 * @file
 * my_church_events.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function my_church_events_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
}
