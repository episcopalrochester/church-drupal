<?php

$info = array(

    // Available colors and color labels used in theme.
    'fields' => array(
      'base' => t('Main bg'),
      'link' => t('Heading and Link color'),
      'sidebar' => t('Sidebar bg'),
      'menulink' => t('Menu link'),
      'text' => t('Text color'),
      'menubgtop' => t('Menu bg top gradient'),
      'menubgbot' => t('Menu bg bottom gradient'),
      'footer' => t('Footer bg'),
      ),
    // Pre-defined color schemes.
    'schemes' => array(
      'default' => array(
        'title' => t('Cherry Pit (Default)'),
        'colors' => array(
          'base' => '#ffffff',
          'link' => '#b00031',
          'sidebar' => '#ededed',
          'menulink' => '#fefefe',
          'text' => '#010101',
          'menubgtop' => '#aa0a35',
          'menubgbot' => '#560527',
          'footer' => '#434343',
          ),
        ),
      'greece' => array(
        'title' => t('Grecian Orange'),
        'colors' => array(
          'base' => '#ffffff',
          'link' => '#c86000',
          'sidebar' => '#f1dabc',
          'menulink' => '#fefefe',
          'text' => '#111111',
          'menubgtop' => '#c35200',
          'menubgbot' => '#5d2400',
          'footer' => '#5d2400',
          ),
        ),


      ),

      // CSS files (excluding @import) to rewrite with new color scheme.
      'css' => array(
          'style.css',
          ),

      // Reference color used for blending. Matches the base.png's colors.
      'blend_target' => '#ffffff',
      );
