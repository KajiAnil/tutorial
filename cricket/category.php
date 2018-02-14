<?php
/**
  * Template Name: Category Page 
*/
  ?>
  <?php get_header(); ?>
<section id="single-news-section" class="single-news">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 ">
                <?php 
                        // Show an optional term description.
                    $taxonomy = 'cat_news';
                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                    // $pagination = get_query_var('paged');
                    $args   = array(
                        'post_type'=> 'news_slider',
                         'posts_per_page'=>3, 
                         'order'=>'DESC',
                         // 'paged'=>$pagination
                        );
                    
                    $tax_args = array();
                    if(( $category )) {
                    $tax_args =
                    array(
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cat_news',
                            'field'    => 'term_id',
                            'terms'    => $terms,
                        )
                    )
                    );
                    }
                    $args = array_merge($args, $tax_args);
                    $loop   = new WP_Query($args);
                    if($loop->have_posts()):
                    while($loop->have_posts()):$loop->the_post();
                 ?>
                <div class="news-detail">
                    <?php  
                    $imgUrl = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');
                    $imgUrl = $imgUrl[0];
                    $content = get_the_content();

                    ?>
                    <h3 class="news-title"><?php the_title() ?></h3>
                    <p class="text-news"><?php echo $content; ?></p>
                    <img src="<?php echo $imgUrl;?>" class="img-fluid img-post" alt="Image Detail">
                </div>
                <!-- <?php  endwhile;
                    if ( function_exists('wp_bootstrap_pagination') )
                        wp_bootstrap_pagination();
                endif; ?> -->
                 
                    
                
            </div>
            <!-- Side Bar -->
            <?php get_sidebar(); ?>
         </div>    
         <!-- /row justify-content-md-center -->
        
    </div>      <!-- /Container -->
</section>   <!-- /section -->
<?php get_footer(); ?>