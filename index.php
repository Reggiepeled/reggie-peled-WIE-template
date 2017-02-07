
<?php get_header(); ?>		<!--link to the header file-->
		<section class="row">		<!--Grid system -->
			<div class="twelve columns">
				<!---- begin loop ---->
				<?php 
				if (have_posts()) :
					while (have_posts()) : the_post(); ?> 
						<h2><?php the_title(); ?></h2>
						<?php the_content();
					endwhile;
				endif; ?>
				<!---- end loop ---->
			</div>
		</section>
<?php get_footer(); ?>		<!--link to the footer file-->