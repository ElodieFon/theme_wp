<?php get_header(); ?>
<div class="d-flex ">
    <!-- sidebar -->
    <div class="p-3 sidebar-left col-3">
    	<?php dynamic_sidebar( 'left-sidebar' ); ?> 
    </div>	
	<div class="posts w-75 container ">
        <!-- contenu article -->
        <?php if(have_posts()):
            while(have_posts()): the_post(); ?>
                <article>
                    <div class="text-center text-capitalize w-100  p-2 text-light mb-2">
                        <h2 ><?php the_title() ?> </h2>        
                    </div>
                    
                    <div class="img-single mb-3" style="background-image: url('<?php the_post_thumbnail_url();?>');"> </div> 
                       
                    <p class="text-capitalize">
                        <?php echo "de ";the_author(); echo " le ". get_the_date();  ?> 
                    </p>		
                    <p>
                        <?php the_content() ;?>
                    </p>
                </article>
            <?php endwhile; 
        endif;?>  

        <!--champs personnalisés -->
        <p> 
				<strong> age :</strong> 
			<?php echo get_post_meta( get_the_ID(), 'age', true )." </br>"; ?>

                <strong> race :</strong> 
			<?php echo get_post_meta( get_the_ID(), 'race', true ); ?>
		</p> 	
        <!-- template commentaire -->
        <div class=" d-flex align-items-center justify-content-center">        
            <?php comments_template() ;?> 
        </div>	                                 
    </div>
    			
</div>

<?php get_footer(); ?>