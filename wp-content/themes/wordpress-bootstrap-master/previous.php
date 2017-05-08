<?php
/*
Template Name: Previous
*/
?>

<?php get_header(); ?>


<style>
.glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 21px;
    padding: 11px;
    /*-webkit-border-radius: 1px;*/
    /*-moz-border-radius: 1px;*/
    /*border-radius: 1px;*/
    border:1px;
    background-color: transparent;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 11px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 11px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 1px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 1px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/current_old.svg');
  height:100vh;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 80%;
  background-attachment: fixed;
}

.lead > img {
  /*border:1px red solid;*/
  width:100$;
  max-height: 20vh;
}

.posts {
  display: none;
}
.img_2017 {
  display: block;
}
</style>

  <div id="content" class="clearfix row" style="margin-top:15vh; margin-bottom:10vh;  margin-left:3vw; margin-right:2vw;">

    <div>
      <label class="glyphicon glyphicon-chevron-left" style="size:120%;" onclick="previous()"></label>
      <span id="year">2017</span>
      <label class="glyphicon glyphicon-chevron-right" onclick="next()"></label>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="products" class="row list-group">

      <?php $args = array("tag" => "2017") ?>
      <?php $myposts = get_posts($args); foreach($myposts as $post) : setup_postdata($post); ?>
      <div class="item  col-xs-4 col-lg-4 img_2017 posts">
        <div class="thumbnail" style="border:0px black solid">
            <?php the_content(); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

      <?php $args = array("tag" => "2016") ?>
      <?php $myposts = get_posts($args); foreach($myposts as $post) : setup_postdata($post); ?>
      <div class="item  col-xs-4 col-lg-4 img_2016 posts">
        <div class="thumbnail" style="border:0px black solid">
            <?php the_content(); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

      <?php $args = array("tag" => "2015") ?>
      <?php $myposts = get_posts($args); foreach($myposts as $post) : setup_postdata($post); ?>
      <div class="item  col-xs-4 col-lg-4 img_2015 posts">
        <div class="thumbnail" style="border:0px black solid">
            <?php the_content(); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

      <?php $args = array("tag" => "2014") ?>
      <?php $myposts = get_posts($args); foreach($myposts as $post) : setup_postdata($post); ?>
      <div class="item  col-xs-4 col-lg-4 img_2014 posts">
        <div class="thumbnail" style="border:0px black solid">
            <?php the_content(); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

      <?php $args = array("tag" => "2013") ?>
      <?php $myposts = get_posts($args); foreach($myposts as $post) : setup_postdata($post); ?>
      <div class="item  col-xs-4 col-lg-4 img_2013 posts">
        <div class="thumbnail" style="border:0px black solid">
            <?php the_content(); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>

    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

      </div> <!-- end #content -->

<?php get_footer(); ?>

<script>
    function next() {
      var years = ["2017", "2016", "2015", "2014", "2013"]
      var year = document.getElementById("year").innerHTML
      var index = years.indexOf(year)
      if (index != (years.length-1)){
        $('.img_'+year).css("display", "none")
        year = years[index+1]
        $('.img_'+year).css("display", "block")
        document.getElementById("year").innerHTML = year
      }
    };
    function previous() {
      var years = ["2017", "2016", "2015", "2014", "2013"]
      var year = document.getElementById("year").innerHTML
      var index = years.indexOf(year)
      if (index != 0){
        $('.img_'+year).css("display", "none")
        year = years[index-1]
        $('.img_'+year).css("display", "block")
        document.getElementById("year").innerHTML = year
      }
    };
</script>