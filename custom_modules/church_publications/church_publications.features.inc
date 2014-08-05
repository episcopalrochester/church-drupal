<?php
/**
 * @file
 * church_publications.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function church_publications_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function church_publications_node_info() {
  $items = array(
    'announcements' => array(
      'name' => t('Announcements'),
      'base' => 'node_content',
      'description' => t('Upload or post parish announcements'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'bulletin' => array(
      'name' => t('Bulletin'),
      'base' => 'node_content',
      'description' => t('Upload a service bulletin. Appears in "Welcome Packet" in sidebar.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'calendar' => array(
      'name' => t('Calendar'),
      'base' => 'node_content',
      'description' => t('Upload a calendar file to the site.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'letter' => array(
      'name' => t('Letter'),
      'base' => 'node_content',
      'description' => t('A letter from the priest'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'newsletter' => array(
      'name' => t('Newsletter'),
      'base' => 'node_content',
      'description' => t('Upload or link to the latest parish newsletter.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
