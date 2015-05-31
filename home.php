<?php
/**
 * Template Name: Homepage
 */
 ?>

<?php get_header(); ?>

<?php

$youtube = get_post_meta(get_the_ID(), 'youtube_url', true);

  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    <div class="jumbo">
       <?php the_post_thumbnail(); ?>
    </div>
<?php } elseif ($youtube != '') {
    include('includes/videoplayer.php');
   } ?>

<div class="container">


  <?php


    // check if the custom field has a value
    //if ($youtube != '') {
      //echo $youtube;
    //}

    ?>


<div class="row">
  <div class="span12">
    <?php the_content(); ?>
  </div>
</div>


<?php get_footer(); ?>
