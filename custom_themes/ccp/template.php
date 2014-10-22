<?php

/**
 * Override of theme_breadcrumb().
 */
function ccp_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb">' . implode(' › ', $breadcrumb) . '</div>';
    return $output;
  }
}

/**
 * Override or insert variables into the maintenance page template.
 */
function ccp_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // ccp_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
  ccp_preprocess_html($vars);
}

/**
 * Override or insert variables into the html template.
 */
function ccp_preprocess_html(&$vars) {
  // Toggle fixed or fluid width.
  if (theme_get_setting('ccp_width') == 'fluid') {
    $vars['classes_array'][] = 'fluid-width';
  }
  // Add conditional CSS for IE6.
  drupal_add_css(path_to_theme() . '/fix-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  $defaults = variable_get("theme_ccp_settings",array());
  $css = array();
  if (isset($defaults['ccp_background_image']['fid'])) {
    $background = file_load($defaults['ccp_background_image']['fid']);
    $css[] = "body { background: url(".file_create_url($background->uri).");}";
  }
  if (isset($defaults['ccp_logo_align'])) {
    $css[] = "#logo-floater { text-align:".$defaults['ccp_logo_align']."; }";
  }
  if (isset($defaults['ccp_image_width'])) {
    $css[] = ".field-name-body .media-image.no-float { width:".$defaults['ccp_image_width']."; }";
  }
  if (isset($defaults['ccp_header_padding'])) {
    $css[] = "#header { padding: ".$defaults['ccp_header_padding']."px 0px ; }";
  }
  if (count($css)) {
    $css_string = implode("\n",$css);
    drupal_add_css($css_string,array(
          'group' => CSS_THEME,
          'type' => 'inline',
          'media' => 'screen',
          'preprocess' => FALSE,
          'weight' => '9999',
          )
        );
  }
}

/**
 * Override or insert variables into the html template.
 */
function ccp_process_html(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}

/**
 * Override or insert variables into the page template.
 */
function ccp_preprocess_page(&$vars) {
  $defaults = variable_get("theme_ccp_settings",array());
   if (isset($defaults['ccp_logo_width'])) {
    $vars['logo_width'] = $defaults['ccp_logo_width'];
  }
 // Move secondary tabs into a separate variable.
  $vars['tabs2'] = array(
      '#theme' => 'menu_local_tasks',
      '#secondary' => $vars['tabs']['#secondary'],
      );
  unset($vars['tabs']['#secondary']);

  if (isset($vars['main_menu'])) {
    $vars['primary_nav'] = theme('links__system_main_menu', array(
          'links' => $vars['main_menu'],
          'attributes' => array(
            'class' => array('links', 'inline', 'main-menu'),
            ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
            )
          ));
    // Get the entire main menu tree
    $main_menu_tree = menu_tree_all_data('main-menu');
    // Add the rendered output to the $main_menu_expanded variable
    $vars['footer_menu'] = menu_tree_output($main_menu_tree);
  }
  else {
    $vars['primary_nav'] = FALSE;
    $vars['footer_menu'] = FALSE;
  }
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_nav'] = theme('links__system_secondary_menu', array(
          'links' => $vars['secondary_menu'],
          'attributes' => array(
            'class' => array('links', 'inline', 'secondary-menu'),
            ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
            )
          ));
  }
  else {
    $vars['secondary_nav'] = FALSE;
  }

  // Prepare header.
  $site_fields = array();
  if (!empty($vars['site_name'])) {
    $site_fields[] = $vars['site_name'];
  }
  if (!empty($vars['site_slogan'])) {
    $site_fields[] = $vars['site_slogan'];
  }
  $vars['site_title'] = implode(' ', $site_fields);
  if (!empty($site_fields)) {
    $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
  }
  $vars['site_html'] = implode(' ', $site_fields);

  // Set a variable for the site name title and logo alt attributes text.
  $slogan_text = $vars['site_slogan'];
  $site_name_text = $vars['site_name'];
  $vars['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}

/**
 * Override or insert variables into the node template.
 */
function ccp_preprocess_node(&$vars) {
  $vars['submitted'] = $vars['date'] . ' — ' . $vars['name'];
}

/**
 * Override or insert variables into the comment template.
 */
function ccp_preprocess_comment(&$vars) {
  $vars['submitted'] = $vars['created'] . ' — ' . $vars['author'];
}

/**
 * Override or insert variables into the block template.
 */
function ccp_preprocess_block(&$vars) {
  $vars['title_attributes_array']['class'][] = 'title';
  $vars['classes_array'][] = 'clearfix';
}

/**
 * Override or insert variables into the page template.
 */
function ccp_process_page(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
}

/**
 * Override or insert variables into the region template.
 */
function ccp_preprocess_region(&$vars) {
  if ($vars['region'] == 'header') {
    $vars['classes_array'][] = 'clearfix';
  }
}

drupal_add_css('http://fonts.googleapis.com/css?family=EB+Garamond', 'external');
drupal_add_css('http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic','external');
