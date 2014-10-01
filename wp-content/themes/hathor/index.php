<?php get_header(); ?>


 <!--Slider-->
 <?php if ( is_home() ) { ?>

<?php if( get_option( 'hathor' )){ ?>
<div class="row"> 

<div id="slider">

<?php get_template_part(''.$slides = of_get_option('slider_select', 'nivo').''); ?>

          
 	<?php }else{ ?>
 
 <?php get_template_part('dummy/dummy','nivo'); ?>
        <?php } ?>  	
            
</div> <?php }?> 



</div>
</div></div>
<!--Slider end-->

<!--Service  Block-->
<div class="services-wrap row "> 
 
<?php if ( is_home() ) { ?>



<?php if( get_option( 'hathor' )){ ?>

  
    
<?php if(of_get_option('blocks_checkbox','hathor') == "1"){ ?>


<?php get_template_part(''.$block = of_get_option('block_select', 'service').''); ?>
<?php }?>
<?php }else{ ?>
 
 <?php get_template_part('dummy/dummy','bloks'); ?>
        <?php } ?>  
 
</div></div>		
<?php }?></div>
<!--Service Block End-->


<!--recent work-->
 
<?php if ( is_home() ) { ?>
<div class="row "> 

<div class="warp large-12 columns">

<?php if( get_option( 'hathor' )){ ?>
<?php if(of_get_option('recentwork_checkbox','hathor') == "1"){ ?>


<?php get_template_part('parts/mid','contant'); ?>

<?php }?>

<?php }else{ ?>
 
 <?php get_template_part('dummy/dummy','contant'); ?>
        <?php } ?> 

</div></div>		
<?php }?></div>



<!--Our Sponsors-->
<?php if( get_option( 'hathor' )){ ?>
<?php if(of_get_option('ourclient_checkbox','hathor') == "1"){ ?>
 <div class="row "> 

<div class=" warp columns">

<?php get_template_part('parts/our','client'); ?>


<?php }?>
<?php } else{ ?>
 
 <?php get_template_part('dummy/dummy','client'); ?>
        <?php } ?>
      </div></div>
<!--Our Client END-->




<?php get_footer(); ?>