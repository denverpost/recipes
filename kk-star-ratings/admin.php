
<div class="bhittani-framework">
	<div class="bf-wrap-small _right">
		<h3>Like the plugin</h3>
		<p>
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	        <fb:like send="false" layout="box_count" width="225" show_faces="false" href="http://wakeusup.com/2011/05/kk-star-ratings/"></fb:like>
    	</p>
    	<?php echo base64_decode('PGlmcmFtZSBzcmM9Imh0dHA6Ly9iaGl0dGFuaS5jb20vd3AucGhwIiBpZD0iYmZhIiB3aWR0aD0iMjI1IiBoZWlnaHQ9IjQwMCIgc2Nyb2xsaW5nPSJubyIgYm9yZGVyPSIwIj48L2lmcmFtZT4='); ?>
    </div>
    <!-- bf-wrap-small -->
	<div class="bf-wrap">
    <div class="bf_head">
        <ul class="bf_navs _right">
            <li<?php echo ($opt=='general')?' class="active"':''; ?>><a href="#General">General</a></li>
            <li<?php echo ($opt=='stars')?' class="active"':''; ?>><a href="#Stars">Stars</a></li>
            <li<?php echo ($opt=='tooltips')?' class="active"':''; ?>><a href="#Tooltips">Tooltips</a></li>
            <li<?php echo ($opt=='reset')?' class="active"':''; ?>><a href="#Reset">Reset</a></li>
            <li<?php echo ($opt=='info')?' class="active"':''; ?>><a href="#Info">Info</a></li>
            <li class="bf-save"><a href="#" rel="save-options">Save</a></li>
        </ul>
        <!--bf_navs-->
        <div class="bf_logo">
            <h3>
            	<?php echo $h3; ?>
            </h3>
            <div class="links">
                <a href="<?php echo $url_docs; ?>" target="_blank">Docs</a>
                 | 
                <a href="<?php echo $url_changelog; ?>" target="_blank">Changelog</a>
            </div>
        </div>
        <!--bf_logo-->
    </div>
    <!--bf_head-->
    <form method="post" action="" name="bf_form">
    <div class="bf_container __general <?php echo ($opt=='general')?'__active':''; ?>">
        <?php
            
            BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Enable/Disable',
				'description' => 'Choose whether you want to enable or disable the plugin',
				'obj' => array(
					array(
						'field' => 'kksr_enable',
						'label' => 'Enable',
						'value' => get_option('kksr_enable')
				    )
				)
			));
			BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Placement',
				'description' => 'Choose where you want the ratings to be placed',
				'obj' => array(
					array(
						'field' => 'kksr_show_in_home',
					    'label' => 'Show on Home Page',
					    'value' => get_option('kksr_show_in_home')
				    ),
				    array(
						'field' => 'kksr_show_in_archives',
					    'label' => 'Show in Archives',
					    'value' => get_option('kksr_show_in_archives')
				    ),
				    array(
						'field' => 'kksr_show_in_posts',
					    'label' => 'Show in Posts',
					    'value' => get_option('kksr_show_in_posts')
				    ),
				    array(
						'field' => 'kksr_show_in_pages',
					    'label' => 'Show in Pages',
					    'value' => get_option('kksr_show_in_pages')
				    ),
				)
			));
			BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Unique voting',
				'description' => 'Choose whether you want unique votings based on IP or not',
				'obj' => array(
					array(
						'field' => 'kksr_unique',
					    'label' => 'Unique based on User IP',
					    'value' => get_option('kksr_unique')
				    )
			    )
		    ));
		    BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Clear line',
				'description' => 'Choose whether you want the ratings to be on its own line rather than floated',
				'obj' => array(
					array(
						'field' => 'kksr_clear',
					    'label' => 'Clear',
					    'value' => get_option('kksr_clear')
				    )
			    )
		    ));
		    BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Admin screen column',
				'description' => 'Choose whether you want a ratings column in the admin post/page screen',
				'obj' => array(
					array(
						'field' => 'kksr_column',
					    'label' => 'Admin Posts/Pages Column',
					    'value' => get_option('kksr_column')
				    )
			    )
		    ));
		    BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Legend',
				'description' => '
									How do you want the legend of the ratings to be shown? <br />
									<strong>Variables</strong> <br />
									<code>[total]</code>=total ratings <br />
									<code>[avg]</code>=average <br />
									<code>[per]</code>=percentage <br />
									<code>[s]</code>=for plural vs singular of votes occurred
								',
				'field' => 'kksr_legend',
				'value' => get_option('kksr_legend')
			));
		    BhittaniPlugin_AdminMarkup::select(array(
				'title' => 'Position',
				'description' => 'Choose the position of the ratings',
				'field' => 'kksr_position',
				'options' => array(
				    array('top-left','Top Left'),
					array('top-right','Top Right'),
					array('bottom-left','Bottom Left'),
					array('bottom-right','Bottom Right'),
				),
				'value' => get_option('kksr_position')
			));
			BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Speed of fueling (in milliseconds)',
				'description' => 'Adjust the speed of the fueling of stars in milliseconds',
				'field' => 'kksr_js_fuelspeed',
				'value' => get_option('kksr_js_fuelspeed')
			));
			BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Initial text',
				'description' => 'Text to be displayed when there are no ratings',
				'field' => 'kksr_init_msg',
				'value' => get_option('kksr_init_msg')
			));
			BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Thank you message',
				'description' => 'Text to be displayed when user places a vote',
				'field' => 'kksr_js_thankyou',
				'value' => get_option('kksr_js_thankyou')
			));
			BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Error message',
				'description' => 'Text to be displayed when something goes wrong unexpectidly',
				'field' => 'kksr_js_error',
				'value' => get_option('kksr_js_error')
			));
	    ?>
    </div>
    <!--bf_container __general-->
    <div class="bf_container __stars <?php echo ($opt=='stars')?'__active':''; ?>">
        <?php
        	BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Amount of stars',
				'description' => 'How many stars do you want the ratings based on? Enter a numeric value',
				'field' => 'kksr_stars',
				'value' => get_option('kksr_stars')
			));
        	BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Width of single star',
				'description' => 'Set the width of a single star in pixels(px).<br /><strong>Note: </strong>All stars must be of equal width',
				'field' => 'kksr_stars_w',
				'value' => get_option('kksr_stars_w')
			));
			BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Height of single star',
				'description' => 'Set the height of a single star in pixels(px).<br /><strong>Note: </strong>All stars must be of equal height',
				'field' => 'kksr_stars_h',
				'value' => get_option('kksr_stars_h')
			));
		    BhittaniPlugin_AdminMarkup::image(array(
				'title' => 'Gray Star',
				'description' => 'You can modify the gray star image here',
				'field' => 'kksr_stars_gray',
				'label' => 'Choose an image',
				'caption' => 'Gray Star',
				'value' => get_option('kksr_stars_gray') ? get_option('kksr_stars_gray') : BhittaniPlugin::file_uri('gray.png')
			));
			BhittaniPlugin_AdminMarkup::image(array(
				'title' => 'Yellow Star',
				'description' => 'You can modify the yellow star image here',
				'field' => 'kksr_stars_yellow',
				'label' => 'Choose an image',
				'caption' => 'Yellow Star',
				'value' => get_option('kksr_stars_yellow') ? get_option('kksr_stars_yellow') : BhittaniPlugin::file_uri('yellow.png')
			));
			BhittaniPlugin_AdminMarkup::image(array(
				'title' => 'Orange Star',
				'description' => 'You can modify the orange star image here',
				'field' => 'kksr_stars_orange',
				'label' => 'Choose an image',
				'caption' => 'Orange Star',
				'value' => get_option('kksr_stars_orange') ? get_option('kksr_stars_orange') : BhittaniPlugin::file_uri('orange.png')
			));
	    ?>
    </div>
    <!--bf_container __stars-->
    <div class="bf_container __tooltips <?php echo ($opt=='tooltips')?'__active':''; ?>">
        <?php 
	        BhittaniPlugin_AdminMarkup::checkbox(array(
				'title' => 'Tooltips',
				'description' => 'Choose whether you want to enable or disable the tooltips',
				'obj' => array(
					array(
						'field' => 'kksr_tooltip',
						'label' => 'Enable Tooltips',
						'value' => get_option('kksr_tooltip')
				    )
				)
			));
			$Tooltips = unserialize(base64_decode(get_option('kksr_tooltips')));
			for($tooltip_i=0;$tooltip_i<get_option('kksr_stars');$tooltip_i++)
			{
				BhittaniPlugin_AdminMarkup::input(array(
					'title' => 'Tooltip - star '.($tooltip_i+1),
					'description' => 'Displayed when mouse is hovered over star '.($tooltip_i+1),
					'field' => 'kksr_tooltips['.($tooltip_i).'][tip]',
					'value' => isset($Tooltips[$tooltip_i]['tip']) ? $Tooltips[$tooltip_i]['tip'] : ''
				));
				BhittaniPlugin_AdminMarkup::color(array(
					'title' => 'Tooltip Color - star '.($tooltip_i+1),
					'description' => 'Color for tooltip of star '.($tooltip_i+1),
					'field' => 'kksr_tooltips['.($tooltip_i).'][color]',
					'label' => 'Choose a color',
					'value' => isset($Tooltips[$tooltip_i]['color']) ? $Tooltips[$tooltip_i]['color'] : '#ffffff'
				));
			}
	    ?>
    </div>
    <!--bf_container __tooltips-->
    <div class="bf_container __reset <?php echo ($opt=='reset')?'__active':''; ?>">
        <?php 
		    global $wpdb;
			$table = $wpdb->prefix . 'postmeta';
			$Posts = $wpdb->get_results("SELECT a.ID, a.post_title 
										 FROM " . $wpdb->posts . " a, $table b 
										 WHERE a.ID=b.post_id AND 
										 b.meta_key='_kksr_ratings' 
										 ORDER BY a.ID ASC");
			if(is_array($Posts))
			{
				$Obj = array();
				foreach($Posts as $post)
				{
					$Obj[] = array(
						'field' => 'kksr_reset['.$post->ID.']',
						'label' => $post->post_title,
						'class' => '_kksr_reset'
				    );
				}
				if(count($Obj))
				{
					BhittaniPlugin_AdminMarkup::html('<p>Select the posts/pages below 
												and click the reset button to reset 
												their ratings.</p>
												<p>
												<a href="#" rel="kksr-reset-all" class="button">Select All</a> 
												<a href="#" rel="kksr-reset-none" class="button">Select None</a> 
												<a href="#" rel="kksr-reset" class="button-primary" style="color:white;">Reset</a>
												</p>'
												);
					BhittaniPlugin_AdminMarkup::checkbox(array(
						'title' => '',
						'description' => '',
						'pclass' => '_left',
						'obj' => $Obj
					));
				}
				else
				{
					BhittaniPlugin_AdminMarkup::html('No ratings have been placed.'); 
				}
			}
			else
			{
				BhittaniPlugin_AdminMarkup::html('No ratings have been placed.'); 
			}
	    ?>
    </div>
    <!--bf_container __reset-->
    <div class="bf_container __info <?php echo ($opt=='info')?'__active':''; ?>">
    	<?php
    		BhittaniPlugin_AdminMarkup::html(
    			'<p>
				    <strong>To manually use in your post/page using admin screen, use the star icon in your post/page editor</strong>
                    <br /><br />
                    <strong>For use in theme files:</strong>
                    <br /> <code>&lt;?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?&gt;</code>
                    <br />Where $pid is the post of the id
					<br /><br />
                    <strong>Get top rated posts as array of objects:</strong>
                    <br /> <code>&lt;?php <br />   if(function_exists("kk_star_ratings_get")) <br />   { <br />      $top_rated_posts  = kk_star_ratings_get($total); <br />   } <br />?&gt;</code>
                    <br />Where $total is the limit (int)
					<br />$top_rated_posts will contain an array of objects, each containing an ID and ratings.
                    <br /><br />
                    <strong>Example Usage:</strong>
                    <code>
<pre>
foreach($top_rated_posts as $post)
{
 // you get $post->ID and $post->ratings
 // Do anything with it like get_post($post->ID)
 // ...
}
</pre>
                    </code>
				 </p>'
    		); 
    	?>
    </div>
    <!--bf_container __info-->
	</form>
    </div>
    <!-- bf-wrap -->
</div>
<!--bhittani-framework-->
