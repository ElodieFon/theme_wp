<?php get_header(); ?>


<div class="d-flex justify-content-between w-100">
    <div class="sidebar-left p-3 col-3">
    		<?php dynamic_sidebar('left-sidebar')?>
    </div>
           
    <div class="posts d-flex flex-wrap justify-content-evenly align-items-baseline p-3">
    

        <h1 class="text-center mb-5 col-12"><?= get_the_archive_title();?></h1>

        <div class="pagination d-flex align-items-center justify-content-evenly flex-row col-12 mb-4">
            <div class="pagination_prev">
                <?php previous_posts_link('< Page précédente '); ?>
            </div>
            <div class="pagination_next">
                <?php next_posts_link('Page suivante >'); ?> 
            </div>
        </div>

        <?php if(have_posts()): 
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
        <?php endwhile; endif;?>                                    
        
    </div>
</div>																		


<?php get_footer(); ?>