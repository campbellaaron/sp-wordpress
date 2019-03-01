<?php get_header(); ?>
  
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="blog-body-single">
                        <div class="blog-img col-sm-12">
                            <h2 class="mt-0"><?php the_title(); ?></h2>
                            <?php if( has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="single-page-author">
                            <p><i>Posted by <?php the_author(); ?></i> on <?php the_time('F j, Y g:i a'); ?></p>
                        </div>
                        <div class="media-body blog-content">
                            <p><?php the_content(); ?></p>
                        </div>
                </div><!--Blog List Body Ends-->
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div><!--Row Ends-->
    <div class="row">
        <div class="comments">
            <?php if (comments_open()) : ?>
                <div class="comments-template">
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div><!--Container Ends-->
  
<?php get_footer(); ?>