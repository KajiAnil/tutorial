<?php
/**
  * Template Name: Blog Page 
*/
  ?>
  <?php get_header(); ?>
<section id="single-news-section" class="single-news">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 ">
                <?php 
                    $args = array(
                        'post_type'=> 'blog_Slider',
                        'orderby'=>'title',
                        'posts_per_page'=>3,
                        'order'=>'desc'
                        );
                    $args = new WP_Query($args);
                     if ( $args->have_posts() ) : 
                        while ( $args->have_posts() ) : $args->the_post();
                 ?>
                <div class="news-detail">
                    <?php  
                    $feature_img= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                    $content = has_excerpt() ? get_the_excerpt() : '';
                    ?>
                    <h3 class="news-title"><?php the_title() ?></h3>
                    <p class="text-news"><?php echo $content; ?></p>
                    <img src="<?php echo $feature_img[0] ?>" class="img-fluid img-post" alt="Image Detail">
                    <p class="text-news">
                        <?php the_content(); ?>
                    </p>
                <?php endwhile; endif; ?>
                </div>
            </div>      <!-- /col-md-8 -->
            <!-- Side Bar -->
            <?php get_sidebar(); ?>
        </div>    <!-- /row justify-content-md-center -->
    </div>      <!-- /single-news -->
</section>   <!-- /section -->
<?php get_footer(); ?>