<?php 
/* 
Template Name: Meeting Minutes Index
*/
?>

<?php get_header(); ?>

<?php 

$loop = new WP_Query(array(
    'post_type' => 'minutes',
    'orderby' => 'date_held',
    'order' => 'DESC'
));

?>

<div class="container meeting-minutes-index">
    <h2>South Point Council Meeting Minutes</h2>
    <p>Council meetings are held the first Tuesday of each month at 7:30pm at the Village Hall</p>
    <input class="form-control" id="minutesInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 30%;">Meeting Type</th>
        <th style="width: 15%;">Date Held</th>
      </tr>
    </thead>
    <tbody id="minutesTable">
        <?php if($loop->have_posts()) : ?>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
      <tr>
        <td><?php the_field('meeting_type'); ?></td>
        <td><a href="<?php the_permalink(); ?>"><?php the_field('date_held'); ?></a></td>
      </tr>
        <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
  </table>
</div>

<?php get_footer(); ?>