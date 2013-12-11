<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 function uos_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Lato');
  
  drupal_add_css(path_to_theme() . '/css/ie8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie7.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js');
  drupal_add_js('http://jquery.lukelutman.com/plugins/pseudo/jquery.pseudo.js');

  
   // $selectivizr = array(
//   '#tag' => 'script',
//   '#attributes' => array( 
		//     'src' => 'http://jquery.lukelutman.com/plugins/pseudo/jquery.pseudo.js', 
//   	),
//   '#prefix' => '<!--[if lt IE 8)]>',
//   '#suffix' => '</script><![endif]-->',
// ); 
// drupal_add_html_head($selectivizr, 'selectivizr');


  
  }