<?php get_header(); ?>
        
        <div id="single_left">
    
            <div id="home_post_box_cont">
            
                <?php while (have_posts()) : the_post(); ?>                                                
        
                    <div class="cat_post_box">
                        <?php the_post_thumbnail('home-post'); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="blog_meta"><?php the_author(); ?> / <?php the_time('m-d-Y') ?> / <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                        <p class="no_margin_bottom"><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,325)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content . '...'; ?></p>                    
                        <div class="clear"></div>
                    </div><!--//cat_post_box-->
                
                <?php endwhile; ?>                
                
            </div><!--//home_post_box_cont-->
        
        </div><!--//single_left-->
<?php get_footer(); ?>                    