<?php
/*
Template Name: Pictures
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh; margin-bottom:10vh">


        <div class="your-class">
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/1.JPG" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/2.JPG" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/3.JPG" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/4.JPG" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/5.JPG" /></div>
        </div>

        <p> &nbsp </p>
        <p> &nbsp </p>

        <div class="multiple-items">
          <div><img class = "floorplan_multiitem" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/1.JPG" /></div>
          <div><img class = "floorplan_multiitem" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/2.JPG" /></div>
          <div><img class = "floorplan_multiitem" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/3.JPG" /></div>
          <div><img class = "floorplan_multiitem" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/4.JPG" /></div>
          <div><img class = "floorplan_multiitem" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/pictures/5.JPG" /></div>
        </div>

      </div>
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal_old.svg');
  height:100vh;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 80%;
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