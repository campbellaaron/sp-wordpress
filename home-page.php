<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
  <section id="intro">
    <div id="spCarouselIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#spCarouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#spCarouselIndicators" data-slide-to="1"></li>
        <li data-target="#spCarouselIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner sp-carousel">
        <div class="carousel-item active">
          <img src="<?php bloginfo('template_directory'); ?>/images/boatdock.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory'); ?>/images/boatdock.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php bloginfo('template_directory'); ?>/images/boatdock.jpg" class="d-block w-100" alt="...">
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
                    <p class="mb-0"><?php the_excerpt(); ?></p>
                    <small class="blockquote-footer">Posted on <cite title="Source Title"><?php the_time('F j, Y'); ?></cite></small> 
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
              <h4>To receive Village information, news and updates: <br> Text  <b>SOPOINT</b>  to  <b>51660</b></h4>
              <i class="fas fa-sms"></i>
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