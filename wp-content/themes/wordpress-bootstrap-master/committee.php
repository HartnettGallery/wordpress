<?php
/*
Template Name: Committee
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh">

        <div id="main" class="clearfix" role="main" style="padding-right:20rem;padding-left:10rem; border:0px red solid">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article"> -->

            <!-- <section class="post_content"> -->
            <section class="post_content">
                          <h1><strong>Committee</strong></h1>
            <p>&nbsp;</p>
            <h4><strong>Our mission:</strong></h4>
            <p>The Hartnett Gallery Committee is comprised of undergraduate student volunteers with a variety of academic interests. Its membership is open to all students with all levels of experience, only requiring an interest in operating a fully-funded, professional art gallery. The Hartnett Committee is involved in every aspect of the gallery, from planning exhibition schedules one year in advance, to meeting with artists and installing shows. Participation on the Committee is intended to give students practical experience in curating, exhibition design, administrative work, and public relations. The student Committee is headed by an annually elected executive board and is assisted by bi-annually selected Graduate Advisors. In addition, the Gallery is overseen by an administrative (Student Activities) and faculty Advisor.</p>
            <p>&nbsp;</p>
            <h4><strong>Executive Positions:</strong></h4>
            <p><strong> Undergraduate Director</strong> </p>
            <p> The Undergraduate Director of the Hartnett Committee coordinates Committee participation, recruitment, weekly meetings, and assists each officer with her or his responsibilities. Duties also include maintaining relations with advisors and students through email announcements. The Director is responsible for updating the Gallery constitution and making information available to Committee members. Additionally, she/he oversees the annual call for submissions and selection process, and calls the first meeting following the holiday break.</p>
            <p><strong> Business Manager </strong> </p>
            <p>The Business Manager is responsible for the Gallery budget. Duties include drawing up the annual budget proposal in the spring; acquiring purchase orders for materials, receptions, and expenses; and maintaining good working relations with the controller and student appropriations office. The Business Manager informs the Committee regularly on the financial status of the Gallery.</p>


            <p><strong> Installation Director </strong> </p>
            <p>The Installation Director coordinates and oversees Gallery installations and de-installations. Duties include setting installation dates and supervising installation (along with the artist, Director, and Advisors), recruiting and keeping good relations with the installation team, and preparing wall labels. The Installation Director is responsible for keeping Gallery materials and equipment stocked and organized.</p>

            <p><strong> Graphics Publicity Director </strong> </p>
            <p>The Graphics Publicity Director works with the Graduate Advisor to design invitation postcards as well as flyers and posters for each exhibition. Because it takes up to ten weeks to prepare printed invitations, this position requires initiative and foresight.  All publicity should be proofed by the Undergraduate Director and Graduate Advisor in advance.</p>

            <p><strong> Media Publicity Director </strong> </p>
            <p>The Media Publicity Director writes and distributes press releases to the Public Relations and Communications Office at the University, as well as to various publicity points in the Rochester area (including the Democrat and Chronicle and the City Newspaper). She or he also maintains links with campus newspapers and the campus radio station (Campus Times, the Buzz, and WRUR).</p>

            <p><strong> Administrative Assistant/ Documentarian/ Secretary </strong> </p>
            <p>The Administrative Assistant takes minutes from the weekly meetings and keeps a list of active and prospective members. According to the Hartnett Constitution, the Administrative Assistant oversees the annual elections of executive positions and as Documentarian, takes photographs at events/installations/openings in order to document what the club is doing.</p>

            <p><strong> Event/Reception Planner </strong> </p>
            <p>The Event/Reception Planner’s main duties include working with the Director, Business Manager, and Advisors to plan artists’ talks and opening receptions and to arrange for catering, entertainment, a/v, etc. The Event/Reception Planner also arranges for Committee field trips and works with the Publicity Directors to make the gallery available for study breaks, parties, and other events.</p>

            <h4><strong>Meetings: </strong> </h4>
            <p>Every other Sunday at 2:00 p.m. in the Gallery, second floor Wilson Commons</p>

            <p>&nbsp;</p>
            <div style="background-color:rgb(202,58,21); color:white; padding-left:2vw; padding-right:2vw; padding-top:2vh;padding-bottom:2vh; display: inline-block;">
            The Hartnett Gallery<br>
            201 Wilson Commons<br>
            University of Rochester<br>
            Rochester, NY 14627<br>
            (585) 275-4188</p>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            </section>p;</p>

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
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal_old.svg');
  height:100vh;
  background-size: 100%;
  background-repeat:round;
}
</style>

<?php get_footer(); ?>