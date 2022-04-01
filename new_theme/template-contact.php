<?php 
/**
 * Template Name: contact
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<div class="d-flex flex-wrap w-100 ">
	<div class="sidebar-left p-3 col-3">
	    	<?php dynamic_sidebar('left-sidebar')?>
	</div>
	<div class="col-8 d-flex flex-wrap">
	<section id="banner" class="p-3 col-12">
		<div class="content">
			<header>			
				<div class="p-4 p-md-5 mb-4 text-white rounded banner" style="background-image: url('<?php the_post_thumbnail_url();?>');">   			
	      			<h1 class="text-capitalize text-center"><?php bloginfo( ); ?></h1>
	      			<p class="lead my-3">		
	    		</div>
			</header>
		</div>								
	</section>
	<div class="d-flex flex-wrap align-items-center justify-content-center col-12" >
	    <h1 class="text-center mb-5 col-12"> <?php the_title()?></h1>

	    <div >
	        <?php the_content() ?>	
	    </div>
	</div>
</div>	
</div>
<?php get_footer() ?>