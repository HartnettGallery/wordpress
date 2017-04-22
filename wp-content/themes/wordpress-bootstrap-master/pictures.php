<?php
/*
Template Name: Pictures
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh; margin-bottom:10vh">

        <div id="main" class="clearfix" role="main" style="padding-right:20rem;padding-left:10rem; border:0px red solid">

        <!-- <div class='single-item'>
          <div><h3>1</h3></div>
          <div><h3>2</h3></div>
          <div><h3>3</h3></div>
          <div><h3>4</h3></div>
          <div><h3>5</h3></div>
          <div><h3>6</h3></div>
        </div> -->

        </div>

      </div>
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal_old.svg');
  height:100vh;
  background-size: 100%;
}
.single-item{
  border: 1px red solid;
}
.slick-slide {
  text-align: center;
  color: #419be0;
  background: white;
}
</style>
<!-- slick support -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<!--
<script type="text/javascript">
  jQuery(function($) {
    $(".single-item").slick({
      dots: true
    });
  });
</script> -->

<?php get_footer(); ?>