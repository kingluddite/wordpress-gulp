<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
          <h2 id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>
<p class="postmetadata">
Posted in <?php the_category(', ') ?>
<strong>|</strong>
<?php edit_post_link('Edit','','<strong>|</strong>'); ?>
<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
<?php endwhile; ?>
 <div class="navigation">
 <div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
 <div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
 </div>
 <?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">
<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>
<?php get_footer(); ?>
