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

</style>
      <div id="content" class="clearfix row" style="margin-top:10vh">

              <!-- <?php get_sidebar(); // sidebar 1 ?> -->

        <div id="main" class="col-sm-12 clearfix" role="main">
          <div id="products" class="row list-group">
            <?php $myposts = get_posts(''); foreach($myposts as $post) : setup_postdata($post); ?>
              <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
        </div>
      </div> <!-- end #content -->

<?php get_footer(); ?>
