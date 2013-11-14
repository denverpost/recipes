<?php
/*
  Template Name: Blog
*/
?>
<?php get_header(); ?>
        
        <div id="single_left">
    
            <div id="home_post_box_cont">
            
                <?php            
                $args = array(
                             'category_name' => 'blog',
                             'post_type' => 'post',
                             'posts_per_page' => 5,
            //                 'cat' => '-' . $category_ID,
                             'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                             );
                query_posts($args);
                $x = 0;
                while (have_posts()) : the_post(); ?>                                                
        
                    <div class="cat_post_box">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post'); ?></a>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="blog_meta"><?php the_author(); ?> / <?php the_time('m-d-Y') ?> / <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                        <p class="no_margin_bottom"><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,325)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content . '...'; ?></p>                    
                        <div class="clear"></div>
                    </div><!--//cat_post_box-->
                
                <?php endwhile; ?>                
                
            </div><!--//home_post_box_cont-->
            
            <div class="home_post_load_more"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-posts.png" />') ?></div>
        
        </div><!--//single_left-->
        
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
			result = $(out).find('#home_post_box_cont .cat_post_box');
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
                          if($(data + ":contains('cat_post_box')") != '') {
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
        
        <?php get_sidebar(); ?>
        
<?php get_footer(); ?>                    