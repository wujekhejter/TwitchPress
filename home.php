<?php
/**
 * Template Name: Homepage
 */
 ?>

<?php get_header(); ?>

<?php
  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    <div class="jumbo">
       <?php the_post_thumbnail(); ?>
    </div>
<?php } ?>


<div class="row">
  <div class="span12">
    <?php the_content(); ?>
  </div>
</div>


<?php get_footer(); ?>
