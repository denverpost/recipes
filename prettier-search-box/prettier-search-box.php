<?php
/*
Plugin Name: Prettier Search Box
Plugin URI: http://blogs.denverpost.com/recipes
Description: Provides a different, simple search box designed to match the Recipe Connection website.
Version: 1.0
Author: Daniel J. Schneider
Author URI: http://www.scrollwright.com
*/

class PrettierSearchBox extends WP_Widget {
          function PrettierSearchBox() {
                    $widget_ops = array(
                    'classname' => 'PrettierSearchBox',
                    'description' => 'Provides a different, simple search box designed to match the Recipe Connection website.'
          );

          $this->WP_Widget(
                    'PrettierSearchBox',
                    'Prettier Search Box',
                    $widget_ops
          );
}

          function widget($args, $instance) { // widget sidebar output
                    extract($args, EXTR_SKIP);
                    echo $before_widget; // pre-widget code from theme

$searchformhtml = '<style type="text/css">
.psb_top { padding: 20px 0; }
h3.psb_title { margin:10px 0 2px;padding:3px 5px;color: #666; }
.psb_search_cont { margin:0; position: relative; }
.psb_search_cont input[type=text] { width: 200px; height: 23px; border: 1px solid #E5E5E5; }
.psb_search_icon { position: absolute; top: 7px; left: 175px; }
</style>
<h3 class="psb_title">Search Recipes</h3>
<div class="psb_search_cont">
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '">
	<input type="text" name="s" id="s" />
	<INPUT TYPE="image" src="' . plugins_url() . '/prettier-search-box/images/search-icon.png" class="psb_search_icon" BORDER="0" ALT="Submit Form">
	</form>
</div>';
        
print $searchformhtml;

         echo $after_widget; // post-widget code from theme
          }
}

add_action(
          'widgets_init',
          create_function('','return register_widget("PrettierSearchBox");')
);
?>