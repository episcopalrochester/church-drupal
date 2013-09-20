<?php
/**
 * @file
 * stewardship.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function stewardship_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_stewardship_settings|node|stewardship_story|form';
  $field_group->group_name = 'group_stewardship_settings';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'stewardship_story';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Settings',
    'weight' => '6',
    'children' => array(
      0 => 'field_stewardship_weight',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-stewardship-settings field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_stewardship_settings|node|stewardship_story|form'] = $field_group;

  return $export;
}
