<?php 
/**
 * Template Name: acceuil
 * Template Post Type: page
 */
?>


<?php get_header(); ?>

<section id="banner" class="p-3">
	<div class="content">
		<header>
			
			<div class="p-4 p-md-5 mb-4 text-white rounded banner" style="background-image: url('<?php the_post_thumbnail_url();?>');">   			
      			<h1 class="text-capitalize text-center"><?php bloginfo( ); ?></h1>
      			<p class="lead my-3">		
    		</div>
  				<?php the_content() ?>		
		</header>
	</div>								
</section>
<div class="block-page p-3">

	<section class="d-flex  justify-content-evenly flex-wrap mb-5">

		<?php if(have_posts()):
			$recentPosts = new WP_Query();
			$recentPosts->query('showposts=4');// limiter au 4 dernier post 

			while($recentPosts->have_posts()): $recentPosts->the_post(); ?>
				<div class="card d-flex align-items-center p-2" style="width: 18rem;">
					<div class="card-body ">
						<h5 class="card-title text-capitalize text-center"><?php the_title() ;?></h5>
						<p><?php echo " de ".get_the_author()." le ".get_the_date();?></p>
	  				</div>

	  				<div class="card-img-top d-flex align-items-center justify-content-center " alt="<?= get_the_title()?>">
						  <?= get_the_post_thumbnail(); ?>
					</div>

	  				<div class="card-body d-flex flex-wrap justify-content-beetween align-items-center">	    				
	    				<p class="card-text extrait"><?php echo get_the_excerpt();?></p>
						<a href="<?php the_permalink();?> " class="btn btn-info text-light d-flex justify-content-center col-12">voir plus</a>
	  				</div>
	  				<ul class="list-group list-group-flush">
	    				<li class="list-group-item "><?php the_category(' > ');?></li>
	  				</ul>
				</div>

			<?php endwhile;
		endif;?>		
	</section>
</div>
<?php get_footer(); ?>
