<?php get_header(); ?>
  
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="blog-body">
                    <div class="media">
                        <div class="blog-img align-self-center">
                            <?php if( has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="media-body blogIndex">
                            <h3 class="mt-0"><?php the_title(); ?></h3>
                            <p><i>Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></i> on <?php the_time('F j, Y'); ?></p>
                            <p><?php the_excerpt(); ?></p>
                            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm sp-text-color">Read More...</a></p>
                        </div>
                    </div>
                </div><!--Blog List Body Ends-->
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-3">
            <?php if(is_active_sidebar('sidebar1')) : ?>
            <?php dynamic_sidebar('sidebar1'); ?>
            <?php endif; ?>
        </div>
    </div><!--Row Ends-->
</div><!--Container Ends-->
  
<?php get_footer(); ?>