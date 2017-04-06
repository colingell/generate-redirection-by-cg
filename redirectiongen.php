<?php
/*
Plugin Name: Redirection Code Generator
Plugin URI: http://trepidation.co.uk/colingell
Description: Script for Generating desktop to mobile specific website in wordpress
Author: Colin Gell
Version: 1.0
Author URI: http://trepidation.co.uk
*/



function register_custom_menu_page() {
    add_menu_page('custom menu title', 'Redirection Code Generator', 'add_users', 'custompage', 'trepi_custom_menu_page', 'dashicons-smartphone', null, 82); 
}
add_action('admin_menu', 'register_custom_menu_page');




function trepi_custom_menu_page(){
?>
<h2>Javascript Redirect</h2><blockquote><code>
<?php
echo htmlspecialchars ('<script type="text/javascript">  var getStr = window.location.search.substr(1); var getArray = getStr.split ("&"); var get = {}; for ( var i = 0; i < getArray.length; i++) { var tmpArray = getArray[i].split("="); get[tmpArray[0]] = tmpArray[1];}if(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile/i.test(navigator.userAgent)){if(document.URL !="'); echo get_site_url(); echo htmlspecialchars ('"){if (get.m != "no") {window.location ="'); echo get_site_url(); echo htmlspecialchars ('";}}}</script>
'); ?></code></blockquote><?php
}