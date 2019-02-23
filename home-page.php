<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
  <section id="intro">
      <div class="jumbotron jumbotron-fluid jumbo-img" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/boatdock.jpg');">
        <div class="container white-header">
          <h1 class="display-3"><?php bloginfo('name'); ?></h1>
          <p class="lead"><i><?php bloginfo('description'); ?></i></p>
          <a class="btn btn-primary btn-lg sp-text-color" href="#" role="button">Learn more</a>
        </div>
      </div>
  </section>
  <section id="news">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center page-header">
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
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h4>
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
            <div class="text-center col-md-8 col-12 mx-auto">
              <p class="lead">Click here to sign up for news updates!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-auto mx-auto"> <a class="btn btn-block btn-lg btn-success" href="#" title="" data-toggle="modal" data-target="#newsModal">Sign up now!</a> </div>
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