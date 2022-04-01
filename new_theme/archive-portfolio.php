
<?php get_header( ); ?>

<?php is_post_type_archive( );?>


<div class="d-flex flex-wrap align-items-center justify-content-evenly h-100">
    <?php if( is_post_type_archive( 'portfolio' ) ) :

    if(have_posts()): 
        while(have_posts()): the_post(); ?>
        <article class="col-5 d-flex flex-wrap justify-content-between mb-3 p-2 border rounded">
            <h3 class="col-12 text-center">
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?> 
                </a>
            </h3>
            <div class="card-img-top col-12 d-flex  align-items-center justify-content-center m-auto" > 
                <a href="<?php the_permalink(); ?>"class="  ">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <div>
                <?php 
                echo "de ";the_author();
                echo " le ". get_the_date().
                "<p>".get_the_excerpt()."</p>
                <p>".get_comments_number()." commentaires sur cette article </p>"; ?> 
            </div>	
           <div class="d-flex justify-content-center align-items-center col-12">
                    <a href="<?php the_permalink() ?>" class="btn btn-info text-light " >More</a>
            </div>	
        </article>
        <?php endwhile; 
        endif;
    endif; ?>      
                             

 </div>

<?php get_footer(); ?>
