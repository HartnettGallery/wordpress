<?php
/*
Template Name: Pictures
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh; margin-bottom:10vh">


        <div class="your-class">
          <div><img class = "floorplan" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/1.jpg" /></div>
          <div><img class = "floorplan" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/2.jpg" /></div>
          <div><img class = "floorplan" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/3.jpg" /></div>
          <div><img class = "floorplan" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/4.jpg" /></div>
          <div><img class = "floorplan" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/5.jpg" /></div>
        </div>

        <p> &nbsp </p>
        <p> &nbsp </p>

        <div class="multiple-items">
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/1.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/2.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/3.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/4.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/5.jpg" /></div>
        </div>

      </div>
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal_old.svg');
  height:100vh;
  background-size: 100%;
  background-attachment: fixed;

}
.single-item{
  border: 1px red solid;
}
.slick-slide {
  text-align: center;
  color: #419be0;
  background: white;
}
.your-class {
  /*border:1px red solid;*/
  width:auto;
  height:100%;
}

.floorplan {
  width: 100%;
  max-height: 50vh;
  margin: auto;
  display: block;
}
.multiple-items {

  margin-left: 0vw;
  width:100%;
}

.floorplan_multiitem {
  padding:10px;
  width: 100%;
  height: auto;
  max-height: 20vh;
  margin: auto;
  display: block;
}
</style>

<?php get_footer(); ?>