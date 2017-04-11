<?php get_header(); ?>

      <div id="content" class="clearfix row">

        <div id="main" class="col-sm-8 clearfix" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <header>

              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>

              <div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>

              <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

            </header>

            <section class="post_content clearfix">
              <?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
            </section>

            <footer>

              <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>

            </footer>
          </article>

          <?php endwhile; ?>

          <?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>

            <?php wp_bootstrap_page_navi(); // use the page navi function ?>

          <?php } else { // if it is disabled, display regular wp prev & next links ?>
            <nav class="wp-prev-next">
              <ul class="pager">
                <li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
                <li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
              </ul>
            </nav>
          <?php } ?>

          <?php else : ?>
<!--
          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
              </section>
              <footer>
              </footer>
          </article> -->

          <?php endif; ?>

        </div>

        <!-- <?php get_sidebar(); // sidebar 1 ?> -->

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button> -->

        <!-- Modal TODO: (mohan) decide position and hide-->
        <!-- Modal TODO: (mohan) put the modal back-->
        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;" >
          <div class="modal-dialog" role="document">
            <div class="modal-content img-responsive" style="background-image:url('/wp-content/themes/wordpress-bootstrap-master/hartnett/RapturePostcardBack.jpg'); background-size:100% 100%; min-height:500px;min-Width:800px;">
              <div class="modal-header" style="border-bottom:0px">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              </div>
            </div>
          </div>
        </div>
      </div>


<!-- <?php // TODO: Mohan refactor into footer ?> -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>

  jQuery(document).ready(function ($) {

    // TODO: (Mohan) maybe resizable
    // $('.modal-content').resizable({
    //     alsoResize: ".modal-dialog",
    //     minHeight: 800,
    //     minWidth: 500
    // });

    $('.modal-dialog').draggable();

    $('#myModal').on('show.bs.modal', function () {
        $(this).find('.modal-body').css({
            'max-height':'100%'
        });
    });
  });

</script>


<?php get_footer(); ?>