<?php
/*
Template Name: Modal
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row">

        <!-- <?php get_sidebar(); // sidebar 1 ?> -->

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button> -->

        <!-- Modal TODO: (mohan) decide position and hide-->
        <!-- Modal TODO: (mohan) put the modal back-->
        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block;">
          <div class="modal-dialog" role="document" style="position:absolute; left:15%; top:15%;">
            <div class="modal-content img-responsive" style="display:block; background-size:100% 100%;">
              <div class="modal-header" style="border-bottom:0px">
                <button id="closeModal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <img width="596" height="400" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/RapturePostcardBack.jpg">

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

    $('#closeModal').click(function() {
      $('#myModal').css("display", "none");
    });

    $('#openModal').click(function() {
      $('#myModal').css("display", "block");
    });

  });

</script>

<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/modal.svg');
  height:100vh;
  background-size: 100%;
}
img {
  /*display: block;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;*/
}
</style>


<?php get_footer(); ?>