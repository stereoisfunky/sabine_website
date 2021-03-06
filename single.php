<?php
/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="content">
<!-- Filter by category -->
    <ul>
    <?php wp_list_categories( array(
        'order' => 'DESC',
        'parent' => 0,
        'title_li' => " ", 
        ) ); ?> 
    </ul>

  <?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div id="sinle_post_container">
      <div class="container pt">
        <div class="row pt">
          <div class="col-lg-10 col-lg-offset-2">
            <section class="post-entry">
              <?php the_content(); ?>

              <?php endif; // no description, no author's meta ?>


                    <?php custom_link_pages( array(
                'before' => '<nav class="pagination"><ul>' . __( '' ),
                'after' => '</ul></nav>',
                'next_or_number' => 'next_and_number', // activate parameter overloading
                'nextpagelink' => __( '&rarr;' ),
                'previouspagelink' => __( '&larr;' ),
                'pagelink' => '%',
                'echo' => 1 )
            ); ?>


                          </section><!-- end of .post-entry -->

                          <footer class="article-footer">
                          </footer>


                        </div>
                      </div>
                    </div>
                  </div>
                </article><!-- end of #post-<?php the_ID(); ?> -->

                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>

              <?php if (  $wp_query->max_num_pages > 1 ) : ?>

              <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">

                    <nav class="navigation">
                     <div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'gents' ) ); ?></div>
                     <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'gents' ) ); ?></div>
                   </nav><!-- end of .navigation -->

                 </div>
               </div>
             </div>
           <?php endif; ?>

         <?php else : ?>

         <article id="post-not-found" class="hentry clearfix">

           <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <header>
                 <h1 class="title-404"><?php _e( '404 &#8212; Fancy meeting you here!', 'gents' ); ?></h1>
               </header>
               <section>
                 <p><?php _e( 'Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents' ); ?></p>
               </section>
               <footer>
                 <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
                 <?php get_search_form(); ?>
               </footer>

             </div>
           </div>
         </div>

       </article>


     <?php endif; ?>

   </div><!-- end of #content -->



   <?php get_footer(); ?>
