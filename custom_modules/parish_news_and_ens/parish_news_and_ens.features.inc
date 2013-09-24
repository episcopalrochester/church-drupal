<?php
/**
 * @file
 * parish_news_and_ens.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function parish_news_and_ens_ctools_plugin_api($module = NULL, $api = NULL) {
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
function parish_news_and_ens_node_info() {
  $items = array(
    'article' => array(
      'name' => t('News Article'),
      'base' => 'node_content',
      'description' => t('Use <em>news articles</em> for time-sensitive content like news, which appears on the front page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
