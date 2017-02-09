<?php get_header(); ?>		<!--link to the header file-->
	<section class="row">		<!--Grid system -->
		<div class="twelve columns">
			<!---- begin loop ---->
			<?php 
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail');
						}
						the_content();?>	
					<a href="<?php the-permalink(); ?>">Read More</a>	
				<?php	
				endwhile;
			endif; ?>
			<!---- end loop ---->
		</div>
	</section>
<?php get_footer(); ?>		<!--link to the footer file-->