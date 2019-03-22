<?php 
/* 
Template Name: Meeting Minutes Page
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="minutes-item">
        <p><?php the_field('minutes_pdf_upload');?></p>  
    </div>
    
</div>


<?php get_footer(); ?>