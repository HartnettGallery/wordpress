<?php
/*
Template Name: Current
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:15vh">

              <!-- <?php get_sidebar(); // sidebar 1 ?> -->

        <div id="main" class="clearfix" role="main" style="-moz-column-count: 2;
-moz-column-gap: 1.5em;
-moz-column-rule: none;
-webkit-column-count: 2;
-webkit-column-gap: 1.5em;
-webkit-column-rule: none;
/* future proof */
column-count: 2;
column-gap: 1.5em;
column-rule: none;">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <section class="post_content">
              <?php the_content(); ?>

            </section>

            <footer>

              <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>

            </footer>

          </article>

          <?php endwhile; ?>


          <!-- <?php else : ?>

          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
              </section>
              <footer>
              </footer>
          </article>

          <?php endif; ?> -->

        </div> <!-- end #main -->

      </div> <!-- end #content -->
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/current_old.svg');
  height:100vh;
  background-size: 100%;
}
</style>

<?php get_footer(); ?>