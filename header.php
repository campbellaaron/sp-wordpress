<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    <?php if ( is_single() || is_page() ) {
        bloginfo('name'); echo " - "; the_title(); 
    } else {
      bloginfo('name');
  }
    ?>  
    </title>
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />    <meta name="resource-type" content="document" />
    <meta name="author" content="Village of South Point" />
    <meta name="contact" content="info@villageofsouthpoint.com" />
    <meta name="copyright" content="Copyright <?php echo date(Y); ?> Village of South Point. All Rights Reserved." />
    <meta name="keywords" content="village, South Point, South Point Ohio, OH, news, the point, 
                south point utilities, village ordinances, south point history, south point mayor,
                south point village council, sp elementary, south point police, south point village,
                south point ohio village ordinances, lawrence county chamber of commerce, south point park" />
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
	  <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/SPt_logo_color-150x150.jpg" alt="" class="rounded-circle img-fluid sp-logo"></a>
      <h4 class="d-block d-sm-none xs-title">Village of South Point</h4>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"><!-- Optional Menu Text <p>Menu</p>--></i> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php wp_nav_menu([
              'theme_location'  => 'primary',
              'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	            'container'       => 'div',
	            'container_id'    => 'navbarSupportedContent',
	            'menu_class'      => 'nav navbar-nav mr-auto',
	            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'          => new WP_Bootstrap_Navwalker()
            ]);
            
            ?>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="<?php echo esc_url(home_url('/')); ?>">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s">
          <button class="btn btn-outline-sp my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>

<!-- Modal -->
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Village Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8944.228295543006!2d-82.5834832990358!3d38.419761585579124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884675592ec5d425%3A0x37097dd35be95111!2s415+Solida+Rd%2C+South+Point%2C+OH+45680!5e0!3m2!1sen!2sus!4v1551984185649" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->