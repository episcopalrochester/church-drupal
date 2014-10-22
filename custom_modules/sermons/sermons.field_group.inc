<?php
/**
 * @file
 * sermons.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function sermons_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_sermon_byline|node|sermon|form';
  $field_group->group_name = 'group_sermon_byline';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'sermon';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Byline',
    'weight' => '3',
    'children' => array(
      0 => 'field_sermon_author',
      1 => 'field_sermon_by_text',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Byline',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => 'group-sermon-byline field-group-fieldset',
        'description' => 'Choose a sermon author from among the staff, or enter a custom value.',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_sermon_byline|node|sermon|form'] = $field_group;

  return $export;
}
