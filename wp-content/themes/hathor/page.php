<?php get_header(); ?>
<div class="row">


<!--Content-->

<div id="content">
<div class="top-content">

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                
                <div class="post_content">
                   
                    <a class="postimg"><?php the_post_thumbnail('medium'); ?></a>
                   
                   
                   <div class="metadate"> <?php edit_post_link(); ?></div> 
                    </div>
                    <div style="clear:both"></div>	
                    <div class="post_info_wrap"><?php the_content(); ?> </div>
                    <div style="clear:both"></div>	
                    
            <div class="post_wrap_n">         
                   
                   
</div>
</div>

    
    <!--POST END--> 
   
    
<?php if(of_get_option('nosidebar_checkbox') == "0"){ ?><?php get_sidebar();?><?php } ?>
</div>
</div>
</div>

<?php get_footer(); ?>