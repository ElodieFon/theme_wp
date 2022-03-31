<?php get_header() ?>
<h1 class="text-center mb-5"><?= get_the_archive_title();?></h1>
<div class="pagination">
    <div class="pagination_prev">
        <?php previous_posts_link('Page précédente'); ?>
    </div>
    <div class="pagination_next">
        <?php next_posts_link('Page suivante'); ?> 
    </div>
</div>
<h2><?php ?></h2>
<div class="posts d-flex flex-wrap justify-content-evenly w-100">
    <?php if(have_posts()): 
        while(have_posts()): the_post(); ?>
       
            <article class="col-5 d-flex flex-wrap ">
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
                <ul class="actions">
                    <li>
                        <a href="<?php the_permalink() ?>" class="button ">More</a>
                    </li>
                </ul>	
            </article>
    <?php endwhile; endif;?>                                      
</div>																		
</div>	


<?php get_footer(); ?>