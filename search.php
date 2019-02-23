<?php get_header(); ?>
  
<div class="container">
    <div class="row">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="col-sm-10 search-index">
                    <h3 class="mt-0"><a href="<?php the_permalink(); ?>" class="search-title"><?php the_title(); ?></a></h3>
                    <p><i>Posted by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></i> on <?php the_time('F j, Y'); ?></p>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php echo "<h2 class='search-h2'>Nothing found! Please try again...</h2>"; ?>
            <?php endif; ?>
    </div><!--Row Ends-->
</div><!--Container Ends-->
  
<?php get_footer(); ?>