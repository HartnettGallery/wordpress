<?php
/*
Template Name: Modal
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row">
        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block; z-index:0;" data-backdrop="false">
          <div class="modal-dialog" role="document" style="position:absolute; left:33vw; top:20vh; width:auto;">
            <div class="modal-content img-responsive" style="display:block; background-size:100% 100%;">
              <div class="modal-header" style="border-bottom:0px">
                <button id="closeModal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <img width="545" height="350" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/RapturePostcardBack.jpg">
            </div>
          </div>
        </div>

        <div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:none; z-index:0;" data-backdrop="false">
          <div class="modal-dialog" role="document" style="position:absolute; left:43vw; top:30vh; width:auto;">
            <div class="modal-content img-responsive" style="display:block; background-size:100% 100%;">
              <!-- <div class="modal-header" style="border-bottom:0px">
                <button id="closeModal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div> -->
              <img width="230" height="50" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/expand.png" onclick="opencusmodal()">
            </div>
          </div>
        </div>
      </div>


<!-- <?php // TODO: Mohan refactor into footer ?> -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
    function opencusmodal() {
      debugger;
      if ($('#myModal2').hasClass('noclick')){
        $('#myModal2').removeClass('noclick');
      }
      else {
        $('#myModal').css("display", "block");
        $('#myModal2').css("display", "none");
      }
    };

  jQuery(document).ready(function ($) {

    $('.modal-dialog').draggable({
      start: function(event, ui) {
          $('#myModal2').addClass('noclick');
      }
    });

    $('#myModal').on('show.bs.modal', function () {
        $(this).find('.modal-body').css({
            'max-height':'100%'
        });
    });

    $('#closeModal').click(function() {
      $('#myModal').css("display", "none");
      $('#myModal2').css("display", "block");
    });

    $('#openModal').click(function() {
      $('#myModal').css("display", "block");
    });

  });

</script>

<style>
body{
  background-image: url('/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/modal_old.svg');

  height:100vh;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 80%;
  background-attachment: fixed;
}
</style>


<?php get_footer(); ?>