<?php

$info = array(

    // Available colors and color labels used in theme.
    'fields' => array(
      'base' => t('Main bg'),
      'link' => t('Link color'),
      'h1' => t('H1 color'),
      'h2' => t('Body H2 color'),
      'h2_sidebar' => t('Sidebar H2 color'),
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
          'h1' => '#020202',
          'h2' => '#030303',
          'h2_sidebar' => '#b00032',
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
          'h1' => '#020202',
          'h2' => '#030303',
          'h2_sidebar' => '#b00032',
          'sidebar' => '#f1dabc',
          'menulink' => '#fefefe',
          'text' => '#111111',
          'menubgtop' => '#c35200',
          'menubgbot' => '#5d2400',
          'footer' => '#5d2400',
          ),
        ),
        'sph' => array(
          'title' => t('Henrietta Blues'),
          'colors' => array(
            'base' => '#ffffff',
            'link' => '#0d77bd',
            'h1' => '#020202',
            'h2' => '#030303',
            'h2_sidebar' => '#b00032',
            'sidebar' => '#eeebcf',
            'menulink' => '#fefefe',
            'text' => '#010101',
            'menubgtop' => '#0d77bd',
            'menubgbot' => '#0b4871',
            'footer' => '#063451',
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
