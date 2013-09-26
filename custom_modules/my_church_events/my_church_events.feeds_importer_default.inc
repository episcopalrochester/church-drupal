<?php
/**
 * @file
 * my_church_events.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function my_church_events_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'my_church_events';
  $feeds_importer->config = array(
    'name' => 'My Church Events',
    'description' => 'Imports from my church events',
    'fetcher' => array(
      'plugin_key' => 'FeedsHTTPFetcher',
      'config' => array(
        'auto_detect_feeds' => FALSE,
        'use_pubsubhubbub' => FALSE,
        'designated_hub' => '',
        'request_timeout' => NULL,
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsSyndicationParser',
      'config' => array(),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'expire' => '-1',
        'author' => '1',
        'authorize' => 1,
        'mappings' => array(
          0 => array(
            'source' => 'title',
            'target' => 'title',
            'unique' => FALSE,
          ),
          1 => array(
            'source' => 'timestamp',
            'target' => 'field_event_date:start',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'description',
            'target' => 'body',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'url',
            'target' => 'field_external_link:url',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'guid',
            'target' => 'guid',
            'unique' => 1,
          ),
        ),
        'update_existing' => '0',
        'input_format' => 'full_html',
        'skip_hash_check' => 0,
        'bundle' => 'upcoming_event',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '21600',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['my_church_events'] = $feeds_importer;

  return $export;
}
