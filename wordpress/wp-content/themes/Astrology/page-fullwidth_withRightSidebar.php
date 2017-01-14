<?php
/**
 * Template Name: Fullwidth Page with Right Sidebar
 */

get_header(); ?>
    
<div class="container">
    <div class="clearfix">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">  
                <div class="wrap_content">         
                	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                            <?php the_content(); ?>
                            <div class="pagination">
                				<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
                            </div><!--.pagination-->
                        </div><!--#post-# .post-->
                    <?php endwhile; ?>
                </div>            
            </div> 
            <?php get_sidebar('right'); ?>
        </div>    
    </div>
</div> 
           
<?php get_footer(); ?>