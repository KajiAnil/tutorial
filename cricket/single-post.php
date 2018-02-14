<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="single-news-section" class="single-news">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8 ">
                             <?php	
                                while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' ,'post');

            			         endwhile; // End of the loop.
			                 ?>
               
                        </div>
            <?php get_sidebar(); ?>
                    </div>  <!-- /col-md-4 -->
                </div> 
            </section>   <!-- /section -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
