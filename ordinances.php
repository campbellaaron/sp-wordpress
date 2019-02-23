<?php 
/* 
Template Name: Ordinance Index
*/
?>

<?php get_header(); ?>

<?php 

$loop = new WP_Query(array(
    'post_type' => 'ordinance',
    'orderby' => 'date_adopted',
    'order' => 'ASC'
));

?>

<div class="container ordinance-index">
  <h2>Notable Ordinances</h2>
  <p>Type in the Ordinance Number, Description, or Date Adopted to find a specific ordinance:</p>  
  <input class="form-control" id="ordInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th style="width: 18%;">Ordinance Number</th>
        <th style="width: 22%;">Title</th>
        <th style="width: 45%;">Description</th>
        <th style="width: 15%;">Date Adopted</th>
      </tr>
    </thead>
    <tbody id="ordTable">
        <?php if($loop->have_posts()) : ?>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
      <tr>
        <td><a href="<?php the_permalink(); ?>"><?php the_field('ordinance-number'); ?></a></td>
        <td><?php the_field('title'); ?></td>
        <td><?php the_field('description'); ?></td>
        <td><?php the_field('date_adopted'); ?></td>
      </tr>
        <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
  </table>
  
</div>

<?php get_footer(); ?>