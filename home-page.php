<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
  <section id="intro">
    <div id="spCarouselIndicators" class="carousel slide sp-carousel" data-ride="carousel">
      <div class="container white-header d-none d-sm-block">
        <h1 class="display-6"><?php bloginfo('name'); ?></h1>
        <p class="col-md"><i><?php bloginfo('description'); ?></i></p>
        <a class="btn btn-lg sp-text-color" href="./village-info/" role="button">Learn more</a>
      </div>  
      <ol class="carousel-indicators">
        <li data-target="#spCarouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#spCarouselIndicators" data-slide-to="1"></li>
        <li data-target="#spCarouselIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?php if (get_field('first_slide')) : ?>
            <img src="<?php the_field('first_slide'); ?>" class="d-block w-100" title="<?php the_field('first_slide_text'); ?>" alt="<?php the_field('first_slide_text'); ?>">
            <?php elseif (empty(get_field('first_slide'))) : ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/default-slide.png" class="d-block w-100" title="Default Slider Image" alt="Default Slider Image, which is the boatdock in South Point">
          <?php endif?>
        </div>
        <div class="carousel-item">
          <?php if (get_field('second_slide')) : ?>
            <img src="<?php the_field('second_slide'); ?>" class="d-block w-100" title="<?php the_field('first_slide_text'); ?>" alt="<?php the_field('first_slide_text'); ?>">
            <?php elseif (empty(get_field('second_slide'))) : ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/default-slide.png" class="d-block w-100" title="Default Slider Image" alt="Default Slider Image, which is the boatdock in South Point">
          <?php endif?>        
        </div>
        <div class="carousel-item">
          <?php if (get_field('third_slide')) : ?>
            <img src="<?php the_field('third_slide'); ?>" class="d-block w-100" title="<?php the_field('first_slide_text'); ?>" alt="<?php the_field('first_slide_text'); ?>">
            <?php elseif (empty(get_field('third_slide'))) : ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/default-slide.png" class="d-block w-100" title="Default Slider Image" alt="Default Slider Image, which is the boatdock in South Point">
          <?php endif?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#spCarouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#spCarouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <section id="news">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center news-header page-header">
                  <h2>In The News</h2>
              </div>
          </div>
          <div class="row">
          <?php
                query_posts('posts_per_page=4&cat=9'); /*1, 2*/
                if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-6 col-lg-6">
                  <blockquote class="blockquote">
                    <div class="home-thumb">
                        <?php if( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <h4 class="post-link"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h4>
                    <small class="blockquote-footer">Posted on <cite title="<?php the_time('F j, Y'); ?>"><?php the_time('F j, Y'); ?></cite></small> 
                    <p class="mb-0"><?php the_excerpt(); ?></p>
                  </blockquote>
              </div>
              <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
          </div>
      </div>
  </section>
  <section id="newsletter">
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="text-center col-md-6 col-12 mx-auto">
            <p><i class="fas fa-mobile-alt"></i></p>  
            <h4>To receive Village information, news and updates: <br> Text  <b>SOPOINT</b>  to  <b>51660</b></h4>
            </div>
          </div>
        </div>
      </div>
  </section>

    <!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Enter your email below!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-group">
                      <label for="emailAddy">Email address</label>
                      <input type="email" class="form-control" id="emailAddy" placeholder="name@example.com">
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Sign Me Up!</button>
          </div>
        </div>
    </div>
</div>
    <!-- Modal Ends -->
<?php get_footer(); ?>