<?php
/**
 * Open Source Social Network
 *
 * @package   fakebook for ossn
 * @author    AntzCode Ltd <www.antzcode.com>
 * @copyright 2020 AntzCode Limited
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.github.com/antzcode/ossn-theme-fakebook
 */
define('__THEMEDIR__', ossn_route()->themes . 'fakebook/');

ossn_register_callback('ossn', 'init', 'ossn_facebook_theme_init');

function ossn_facebook_theme_init(){	
	//add bootstrap
	ossn_new_css('bootstrap.min', 'css/bootstrap/bootstrap.min.css');
	//ossn_new_js('bootstrap.min', 'js/bootstrap/bootstrap.min.js');
	
	ossn_new_css('ossn.default', 'css/core/default');
	ossn_new_css('ossn.admin.default', 'css/core/administrator');

	//load bootstrap
	ossn_load_css('bootstrap.min', 'admin');
	ossn_load_css('bootstrap.min');

	ossn_load_css('ossn.default');
	ossn_load_css('ossn.admin.default', 'admin');
	
	ossn_extend_view('ossn/admin/head', 'ossn_facebook_admin_head');
	ossn_extend_view('ossn/site/head', 'ossn_facebook_head');
	ossn_extend_view('js/opensource.socialnetwork', 'js/facebook');
}
function ossn_facebook_head(){
	$head	 = array();
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  'https://fonts.googleapis.com/css?family=PT+Sans:400italic,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));
	return implode('', $head);
}
function ossn_facebook_admin_head(){
	$head	 = array();
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=Roboto+Slab:300,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));
	return implode('', $head);
}
