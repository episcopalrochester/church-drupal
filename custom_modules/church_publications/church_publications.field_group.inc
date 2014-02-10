<?php
/**
 * @file
 * church_publications.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function church_publications_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_letter_byline|node|letter|form';
  $field_group->group_name = 'group_letter_byline';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'letter';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Byline',
    'weight' => '3',
    'children' => array(
      0 => 'field_letter_author',
      1 => 'field_letter_by_text',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-letter-byline field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_letter_byline|node|letter|form'] = $field_group;

  return $export;
}
