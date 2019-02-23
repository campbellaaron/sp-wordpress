<?php 
/* 
Template Name: Ordinance Description
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="ordinance-item">
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('pdf_upload');?></p>  
    </div>
    
</div>


<?php get_footer(); ?>