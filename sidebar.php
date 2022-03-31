<!-- Sidebar -->
<div id="sidebar-right" class="col-2 m-1 p-3 bg-warning">
	<div class="inner ">

			<header class="major">
				<h2>Recent posts</h2>
			</header>
			<div class="mini-posts">
				<?php 
				if(have_posts()): 
					$recentPosts = new WP_Query();
    				$recentPosts->query('showposts=3');

					while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
						<article>
							<h3>
								<a href="<?php the_permalink() ?>">
									<?php the_title() ?> 
								</a>
							</h3>
							<div class="d-flex justify-content-center"> 
								<a href="<?php the_permalink(); ?>"class="image">
									<?php the_post_thumbnail(); ?>
								</a>
							</div>
							<p>
								<?php  the_excerpt() ; ?>
							</p>														
						</article>
					<?php endwhile; 
				 endif;?>
				
						<!-- <ul class="actions">
						<li><a href="<?php //the_permalink() ;?>" class="button">voir plus</a></li>
					</ul> -->

					
			</div>
			
		</section>  								
	</div>
</div>