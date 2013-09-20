<?php
/**
 * @file
 * front_page_slideshow.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function front_page_slideshow_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_slide_settings|node|front_page_slide|form';
  $field_group->group_name = 'group_slide_settings';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'front_page_slide';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Slide settings',
    'weight' => '5',
    'children' => array(
      0 => 'field_slide_text_position',
      1 => 'field_slide_weight',
      2 => 'field_slide_link',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-slide-settings field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_slide_settings|node|front_page_slide|form'] = $field_group;

  return $export;
}
