<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<?php the_content(); ?>


<?php edit_post_link('Edit','','<strong>|</strong>'); ?>

<?php endwhile; ?>

 <?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">
<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
