
<?php get_header();?>

<div class="container pt-5">
<div class="content">
    <div class="row">


        <div class="col-md-9 ">
            
    <?php while (have_posts()):the_post();?>
 <h2 >
 <?php the_title();?>
</h2>
      
      <div class="info">[By <?php the_author();?> on <?php the_time('Y D M g i a');?> with <a href="<?php the_permalink();?>"><?php comments_popup_link();?></a>]</div>
       <?php the_post_thumbnail();?>
    <h5 class="mt-3">   <?php the_content();?></h5>





       <?php endwhile;?>
</div>


<!--sidebar-->
<?php get_sidebar('');?>
    </div>




</div>
</div>
<?php get_footer();?>
