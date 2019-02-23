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
                 <!-- <h4>Mayor's Office</h4>
                 <ul>
                     <li>Mon - Fri, 8:30am - 4:30pm</li>
                     <li>Ph: <a href="tel:+1-740-377-4838">(740) 377-4838</a></li>
                     <li>Fax: (740) 377-0043</li>
                 </ul> -->
             </div>
             <div class="col-sm-4 secondFtr">
                <?php if(is_active_sidebar('footer2')) : ?>
                <?php dynamic_sidebar('footer2'); ?>
                <?php endif; ?>
                 <!-- <h4>Village of South Point</h4>
                 <p>415 Solida Rd. <br>South Point OH  45680</p> -->
             </div>
             <div class="col-sm-4 thirdFtr">
                <?php if(is_active_sidebar('footer3')) : ?>
                <?php dynamic_sidebar('footer3'); ?>
                <?php endif; ?>
                 <!-- <h4>Links</h4>
                 <ul>
                     <li><a href="http://www.lawrencecountyohio.org/">Lawrence County, OH</a></li>
                     <li><a href="http://omlohio.org/">Ohio Municipal League</a></li>
                     <li><a href="https://www.ovrdc.org/">Ohio Valley Regional Development Commission</a></li>
                 </ul> -->
             </div>
         </div>
     </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 copyright">
			  <p>Copyright &copy; <?php echo date(Y); ?> <?php bloginfo(‘name’);?>. All rights reserved.</p>			  
			  <p>Site design by <a href="http://campbelldev.net" title="Aaron Campbell's Portfolio">Aaron Campbell</a>.</p>
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