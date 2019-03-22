<?php get_header(); ?>
  
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                    <div class="blog-body-single">
                        <div class="blog-img col-sm-12">
                            <?php if( has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <h2 class="mt-0"><?php the_title(); ?></h2>
                        </div>
                        <div class="media-body page-content">
                            <p><?php the_content(); ?></p>
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