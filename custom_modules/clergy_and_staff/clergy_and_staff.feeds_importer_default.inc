<?php
/**
 * @file
 * clergy_and_staff.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function clergy_and_staff_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'import_staff';
  $feeds_importer->config = array(
    'name' => 'Import Staff',
    'description' => 'Import staff profiles from CSV',
    'fetcher' => array(
      'plugin_key' => 'FeedsFileFetcher',
      'config' => array(
        'allowed_extensions' => 'txt csv tsv xml opml',
        'direct' => FALSE,
        'directory' => 'private://feeds',
        'allowed_schemes' => array(
          0 => 'public',
          1 => 'private',
        ),
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsCSVParser',
      'config' => array(
        'delimiter' => ',',
        'no_headers' => 0,
      ),
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
            'unique' => 1,
          ),
          1 => array(
            'source' => 'body',
            'target' => 'body',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'photo',
            'target' => 'field_staff_image',
            'unique' => FALSE,
          ),
          3 => array(
            'source' => 'email',
            'target' => 'field_e_mail',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'photo',
            'target' => 'field_staff_teaser_image',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'weight',
            'target' => 'field_staff_weight',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '2',
        'input_format' => 'full_html',
        'skip_hash_check' => 0,
        'bundle' => 'staff_profile',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['import_staff'] = $feeds_importer;

  return $export;
}
