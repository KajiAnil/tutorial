<?php
/*
Template Name: Archives Pages
*/
get_header(); ?>
<section id="single-news-section" class="single-news">
	<div id="container">
		<div class="row justify-content-md-center">
			<div class="col-md-8 ">
				<div id="content" role="main">
				<?php  
					while ( have_posts() ) : the_post();
						get_template_part( 'category');
                    
                endwhile;
                if ( function_exists('wp_bootstrap_pagination') )
                        wp_bootstrap_pagination();
                 ?>
				</div><!-- #content -->
			</div><!-- #col-md-8 -->
		<?php get_sidebar(); ?>
		</div><!-- #row -->
	</div><!-- #container -->
</section><!-- #container -->
<?php get_footer();?>