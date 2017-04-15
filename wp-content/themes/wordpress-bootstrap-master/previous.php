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
    margin-bottom: 20px;
    padding: 10px;
    /*-webkit-border-radius: 0px;*/
    /*-moz-border-radius: 0px;*/
    /*border-radius: 0px;*/
    border:0px;
    background-color: transparent;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
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
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/current.svg');
  height:100vh;
  background-size: 100%;
}
</style>

  <div id="content" class="clearfix row" style="margin-top:15vh">

    <div id="products" class="row list-group">
        <?php $myposts = get_posts(array('tag' => '2017')); foreach($myposts as $post) : setup_postdata($post); ?>
        <div class="item  col-xs-4 col-lg-4">
          <div class="thumbnail" style="border:0px black solid">
              <?php the_content(); ?>
              <!-- <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> -->
              <!-- <div class="caption">
                  <h4 class="group inner list-group-item-heading">
                      Product title</h4>
                  <p class="group inner list-group-item-text">
                      Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                      sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                          <p class="lead">
                              $21.000</p>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                      </div>
                  </div>
              </div> -->
          </div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>

      </div> <!-- end #content -->

<?php get_footer(); ?>
