<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
	  <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/SPt_logo_color-150x150.jpg" alt="" class="rounded-circle img-fluid sp-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"><!-- Optional Menu Text <p>Menu</p>--></i> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
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
            
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->