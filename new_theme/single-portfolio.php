<?php get_header( ); ?>

<?php is_singular('portfolio'); ?>

<div class="d-flex justify-content-between  ">

    <div class=" p-2 sidebar-left col-3">
        <?php dynamic_sidebar('left-sidebar')?>
    </div>

    <div class="contenue d-flex justify-content-center m-3 ">
  
   
        <?php if( is_singular( 'portfolio' ) ) :

            if(have_posts()):

                while(have_posts()): the_post(); ?>
                    <article>
                        
                        <div class="text-center text-capitalize w-100  p-2 text-light mb-2">
                            <h2 ><?php the_title() ?> </h2>        
                        </div>

                        <div class="img-single mb-3" style="background-image: url('<?php the_post_thumbnail_url();?>');"> </div> 

                        <p class="text-capitalize">
                            <?php echo "de ";the_author(); echo " le ". get_the_date();  ?> 
                        </p>		
                        <p >
                            <?php the_content() ;?>
                        </p>
                    </article>
                <?php endwhile;  
            endif;
        endif;?>
        	
    </div>
</div>
<hr class="bg-danger p-1 w-100"><hr class="bg-danger  w-100">
<div class=" d-flex align-items-center justify-content-center">        
    <?php comments_template() ;?> 
</div>
<?php get_footer(); ?>