<?php get_header();?>


<div class="d-flex justify-content-between ">

    <div class=" p-2 sidebar-left  col-3">
		<?php dynamic_sidebar('left-sidebar')?>
	</div>

	<div class="contenue  col-6 d-flex justify-content-center">
		<div class="">
		<h1 class="text-center mb-4"><?php the_title() ;?></h1>
									
			<?php 
			if(have_posts()):
				while(have_posts()): the_post(); 
					echo "<p><em>creer par ".get_the_author()." le ".get_the_date()."</em></p>";										
				endwhile ;
			endif;
																							
			echo"<span class=image>";the_post_thumbnail();echo"</span>";

		echo "<p>". the_content()."</p>	";?>
		</div>
	</div>
	<?= get_sidebar()?>
</div>

<?php get_footer();?> 		


