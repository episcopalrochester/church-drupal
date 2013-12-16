<?php

/**
 * @file
 * Theme setting callbacks for the ccp theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function ccp_form_system_theme_settings_alter(&$form, &$form_state) {
  $defaults = variable_get("theme_ccp_settings",array());
  if (!is_array($defaults['ccp_background_image'])) {
    $defaults['ccp_background_image'] = array();
  }
  $form['ccp_background_image'] = array(
      '#title' => t('Background Image'),
      '#description' => 'Choose an image.',
      '#type' => 'media',
      '#tree' => TRUE,
      '#default_value' => $defaults['ccp_background_image'],
      '#media_options' => array(
        'global' => array(
          'types' => array(
            'image' => 'image',
            ),
          'schemes' => array(
            'public' => 'public',
            ),
          'file_directory' => 'theme',
          'file_extensions' => 'png gif jpg jpeg',
          'max_filesize' => '10 MB',
          'uri_scheme' => 'public',
          ),
        ),
      );
  if (!$defaults['ccp_logo_align']) {
    $defaults['ccp_logo_align'] = 'left';
  }
  $form['ccp_logo_align'] = array(
      '#title' => 'Logo alignment',
      '#type' => 'select',
      '#options' => array(
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right',
        ),
      '#default_value' => $defaults['ccp_logo_align'],
      );
  if (!$defaults['ccp_logo_width']) {
    $defaults['ccp_logo_width'] = '4';
  }
  $form['ccp_logo_width'] = array(
      '#title' => 'Logo size',
      '#type' => 'select',
      '#options' => array(
        '4' => 'Small',
        '12' => 'Full',
        ),
      '#default_value' => $defaults['ccp_logo_width'],
      );
  if (!$defaults['ccp_header_padding']) {
    $defaults['ccp_header_padding'] = '25';
  }
  $form['ccp_header_padding'] = array(
      '#title' => 'Header padding',
      '#type' => 'textfield',
      '#default_value' => $defaults['ccp_header_padding'],
      );
}
