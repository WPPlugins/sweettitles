<?php

/*

Plugin Name: sweetTitles

Plugin URI: http://blueandhack.com/wordpress/832.html

Description: The name comes from Sweet Titles to change the Title prompt effects plug-js Sweet Titles Finalized, this plug-in effect makes the title prompted to become beautiful, and can show you are going to click on the link to the url, so that users know where to go, while improving degree of user experience.Sweet Titles 这个名字源自于改变 Title 提示效果的 js 插件 Sweet Titles Finalized,此插件使得 title 提示效果变得美观，而且可以显示出你将要点击的链接的 url，让用户知道自己将要去哪里，同时提升了用户感受度。

Version: 1.3

Author: blueandhack

Author URI: http://blueandhack.com
*/

//引用jquery
wp_enqueue_script( 'jquery' );

function sweetTitles(){
	
	//获取css地址
	$css_url = get_bloginfo("wpurl") . '/wp-content/plugins/sweettitles/css/sweetTitles.css';
	
	$script_html = '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/sweettitles/js/sweetTitles.js"></script>';
	
	echo "\n" . '<link rel="stylesheet" href="' . $css_url . '" type="text/css" media="screen" />' . $script_html;
	
	}
	
add_action('wp_head', 'sweetTitles');

?>