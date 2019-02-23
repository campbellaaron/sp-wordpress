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
			<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Government </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Board of Commissioners</a> 
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Education</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://www.southpointpd.com/" target="_blank">South Point Police Department</a> 
            </div>
          </li>
			<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="developDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Development </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">LEDC</a> 
				<a class="dropdown-item" href="#">Village Projects</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" target="_blank">South Point Police Department</a> 
            </div>
          </li>
		  <li class="nav-item"> <a class="nav-link" href="#">Map</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pay Online </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://www.ohioticketpayments.com/SouthPoint/DocketSearch.php" target="_blank">Ticket</a> <a class="dropdown-item" href="#">Utility Bill</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://www.officialpayments.com/pay-ohio-property-tax.jsp" target="_blank">Ohio Property Tax</a> 
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contact Us</a> </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-sp my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>