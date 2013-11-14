<?php get_header(); ?>
        <div id="single_left">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <h1><?php the_title(); ?></h1>
                  <div class="single_content touch_list">
                  <?php the_content(); ?>
                  </div><!--//single_content-->				<div id="socialshare">									<div class="socialbutton socialtitle">					<h2>Share it:</h2>					</div>										<div class="socialbutton twbutton">					<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>					<a href="http://twitter.com/share" class="twitter-share-button"						 data-url="<?php the_permalink(); ?>"						 data-via="denverpost"						 data-text="<?php the_title(); ?>"						 data-count="horizontal">Tweet</a>					</div>										<div class="socialbutton gpbutton">					<script type="text/javascript" src="https://apis.google.com/js/plusone.js">					// parsetags: 'explicit';					</script>					<div id="plusone-div"></div>					<script type="text/javascript">gapi.plusone.render ('plusone-div', {"size": "medium", "count": "true"});</script>					</div>										<div class="socialbutton fbbutton">					<iframe src="http://www.facebook.com/plugins/like.php?&amp;href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true">					</iframe>					</div>										<div class="socialbutton ptbutton">					<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>					<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal">Pin It</a>					</div>										<div class="socialbutton print">					<a href="#" onClick="window.print();" title="Print this recipe"><img style="border:none;" src="<?php bloginfo('stylesheet_directory'); ?>/images/print-button.png" alt="Print this recipe"/></a>					</div>										<div class="socialbutton emailbutton">					<?php if(function_exists('email_link')) { email_link(); } ?>					</div>								</div>
                  <br /><br />
                  <?php comments_template(); ?>                        
                  <div class="clear"></div>
            <?php endwhile; else: ?>
                <h3>Sorry, no posts matched your criteria.</h3>
            <?php endif; ?>    
        </div><!--//single_left-->
<?php get_footer(); ?>