<?php
/**
 Template Name: Portfolio
 *
 *
 * @file           template-portfolio.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2003 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
 ?>
 <?php get_header(); ?>

 <div class="container pt">

  <?php
  $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1));
  $count =0;
  ?>


  <div class="row mt centered">

    <?php if ( $loop ) : 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-lg-6 portfolio-thumbnail">
     <?php if ( has_post_thumbnail()) : ?>
     <a class="" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      <p class="thumb-title"><?php the_title_attribute(); ?></p>
    </a>
  <?php endif; ?>
  
  <?php if(bi_get_data('project_title', '1')) {?>
  <!--<p><?php the_title(); ?></p>-->
  <?php } ?>
</div> <!-- /col -->

<?php endwhile; else: ?>
</div>

<div class="error-not-found">Sorry, at the moment I am busy restyling the portfolio.</div>

<?php endif; ?>

</div><!-- end of container -->


<?php get_footer(); ?>