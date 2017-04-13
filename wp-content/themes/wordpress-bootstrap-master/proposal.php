<?php
/*
Template Name: Proposal
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh">

        <div id="main" class="clearfix" role="main" style="padding-right:20rem;padding-left:10rem; border:0px red solid">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article"> -->

            <!-- <section class="post_content"> -->
            <section class="post_content">
                          <h1><strong>Artist Submission Information</strong></h1>
            <p class="lead">&nbsp;</p>
            <p>The Hartnett Gallery at the University of Rochester in Rochester, New York is now accepting proposals from individual artists and groups interested in exhibiting their work during the 2016-2017 academic year. The Hartnett Gallery is committed to diversity and inclusivity, and welcomes proposals from artists based in the United States working in any medium or format. Proposals from University of Rochester alumni artists will be accepted for a show during Meliora Weekend.</p>
            <p>Established in 1972, this unique triangular gallery is located in one of the main buildings of the university, Wilson Commons, which was designed by the gallery of renowned architect I.M. Pei. The gallery has a rich exhibition history that includes artists beginning their artistic careers as well as artists maintaining international recognition.</p>
            <p>Proposals should include:</p>
            <p>1) a Curriculum Vitae</p>
            <p>2) an Artist’s Statement</p>
            <p>3) a Project Description, specifying spatial and technical needs</p>
            <p>4) 8-10 representative Digital Images</p>
            <p>5) an Image List (title, date, dimensions, medium)</p>
            <p>&nbsp;<br>
            Please email proposals to hartnett@ur.rochester.edu by the submission deadline of April 1, 2016.</p>
            <p>&nbsp;<br>
            The Hartnett Gallery<br>
            201 Wilson Commons<br>
            University of Rochester<br>
            Rochester, NY 14627<br>
            (585) 275-4188</p>

            </section>

            <!-- </section> -->

            <footer>

              <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>

            </footer>

          <!-- </article> -->

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

        </div>

      </div>
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal.svg');
  height:100vh;
  background-size: 100%;
}
</style>

<?php get_footer(); ?>