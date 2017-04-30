<?php
/*
Template Name: Floorplan
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh; margin-bottom:10vh">


        <div class="your-class">
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel1.jpg" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel2.jpg" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel3.jpg" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel4.jpg" /></div>
          <div><img class = "floorplan" src="/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettFloorPlan.jpg" /></div>
        </div>

        <p> &nbsp </p>
        <p> &nbsp </p>
        <!-- <p> &nbsp </p> -->
        <h3> <a href = "/hartnett/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/Hartnett.Floor.Plan.Compiled.pdf"> Download Full Floor Plan </a></h3>
        <!-- <div class="multiple-items">
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel1.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel2.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel3.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettModel4.jpg" /></div>
          <div><img class = "floorplan_multiitem" src="/wp-content/themes/wordpress-bootstrap-master/hartnett/FloorPlanGallery/HartnettFloorPlan.jpg" /></div>
        </div> -->


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