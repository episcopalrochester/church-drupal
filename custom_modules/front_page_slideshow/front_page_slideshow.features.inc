<?php
/**
 * @file
 * front_page_slideshow.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function front_page_slideshow_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function front_page_slideshow_image_default_styles() {
  $styles = array();

  // Exported image style: front_page_slide.
  $styles['front_page_slide'] = array(
    'name' => 'front_page_slide',
    'effects' => array(
      2 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1200,
          'height' => 450,
        ),
        'weight' => 1,
      ),
    ),
    'label' => 'front_page_slide',
  );

  // Exported image style: front_page_slide_admin.
  $styles['front_page_slide_admin'] = array(
    'name' => 'front_page_slide_admin',
    'effects' => array(
      2 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 240,
          'height' => 90,
        ),
        'weight' => 1,
      ),
    ),
    'label' => 'front_page_slide_admin',
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function front_page_slideshow_node_info() {
  $items = array(
    'front_page_slide' => array(
      'name' => t('Front Page Slide'),
      'base' => 'node_content',
      'description' => t('Add a slide to the front page slideshow/carousel.'),
      'has_title' => '1',
      'title_label' => t('Slide title'),
      'help' => '',
    ),
  );
  return $items;
}
