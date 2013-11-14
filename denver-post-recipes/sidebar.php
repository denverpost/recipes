        <div id="sidebar">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>       
                <div class="side_box">
                    <h3>widget Error</h3>
                    <p>Error: Sidebar widgets failed to load.</p>
                </div><!--//side_box-->                        
            <?php endif; ?>     
        </div><!--//sidebar-->