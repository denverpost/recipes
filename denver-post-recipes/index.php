<?php get_header(); ?>
        <div id="home_post_box_cont">
            <?php
            $category_ID = get_category_id('blog');
            $args = array(
                         'post_type' => 'post',
                         'posts_per_page' => 5,
                         'post__not_in' => $slider_arr,
                         'cat' => '-' . $category_ID,                         
                         'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                         );
            
            query_posts($args);
            $x = 0;
            while (have_posts()) : the_post(); $starsID = get_the_ID(); ?>        
    
                <div class="home_post_box">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post'); ?></a>
                    
                    <div class="home_post_cont">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                        <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_excerpt()),0,200)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content . '...'; ?></p>
                        
                        <div class="home_post_meta">Rating: <?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($starsID); endif; ?></div>
                    </div><!--//home_post_cont-->
                    
                    <div class="clear"></div>
                </div><!--//home_post_box-->
                
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>                    
                    </div><!--//home_post_box_cont-->
        
        <div class="home_post_load_more"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-posts.png" />') ?></div>
        
        <script type="text/javascript">
// Ajax-fetching "Load more posts"
$('.home_post_load_more a').live('click', function(e) {
	e.preventDefault();
	//$(this).addClass('loading').text('Loading...');
        //$('.load_more_text a').html('Loading...');
	$.ajax({
		type: "GET",
		url: $(this).attr('href') + '#main_container',
		dataType: "html",
		success: function(out) {
			result = $(out).find('#home_post_box_cont .home_post_box');
			nextlink = $(out).find('.home_post_load_more a').attr('href');
                        //alert(nextlink);
			//$('#boxes').append(result).masonry('appended', result);
                    $('#home_post_box_cont').append(result);
			//$('.fetch a').removeClass('loading').text('Load more posts');
                        //$('.load_more_text a').html('Load More'); 
			if (nextlink != undefined) {
				$('.home_post_load_more a').attr('href', nextlink);
			} else {
				$('.home_post_load_more').remove();
                                $('#home_post_box_cont').append('<div class="clear"></div>');
                              //  $('.load_more_cont').css('visibilty','hidden');
			}
                    if (nextlink != undefined) {
                        $.get(nextlink, function(data) {
                          //alert(nextlink);
                          if($(data + ":contains('home_post_box')") != '') {
                            //alert('not found');
                              //                      $('.load_more_cont').remove();
                                                    $('#home_post_box_cont').append('<div class="clear"></div>');        
                          }
                        });                        
                    }              
		}
	});
});
</script>                
        
<?php get_footer(); ?>                    