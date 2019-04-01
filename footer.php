 <?php 
 /*
 Template Name: Footer Page
 */
 ?>
 <footer class="text-center sp-footer">
     <div class="container">
         <div class="row">
            <div class="col-sm-4 firstFtr">
                <?php if(is_active_sidebar('footer1')) : ?>
                <?php dynamic_sidebar('footer1'); ?>
                <?php endif; ?>
             </div>
             <div class="col-sm-4 secondFtr">
                <?php if(is_active_sidebar('footer2')) : ?>
                <?php dynamic_sidebar('footer2'); ?>
                <?php endif; ?>
                <div class="row">
                  <div class="text-center col-md">
                    <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#mapModal">View Map</button>
                  </div>
                </div>
              </div>
             <div class="col-sm-4 thirdFtr">
                <?php if(is_active_sidebar('footer3')) : ?>
                <?php dynamic_sidebar('footer3'); ?>
                <?php endif; ?>
             </div>
         </div>
     </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 copyright">
			  <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>			  
			  <p>Site design by <a href="http://campbelldev.net" title="Aaron Campbell's Portfolio" target="_blank">Aaron Campbell</a>.</p>
          </div>
        </div>
      </div>
    </footer><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="<?php bloginfo('template_directory'); ?>/js/popper.min.js"></script> 
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-4.0.0.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>