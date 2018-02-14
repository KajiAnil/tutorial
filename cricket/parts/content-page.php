<?php get_header(); ?>

<section id="main-post-section" class="main-post">
    <div class="container">
        <div class="row">
            <?php 
                $my_query = new WP_Query('page_id=93');
                    while ($my_query->have_posts()) : $my_query->the_post();
                    $do_not_duplicate = $post->ID;?>
            <h3 class="section_title"><?php the_title(); ?>:</h3>
        </div>
    </div>
    <div class="container category-name">
        <div class="row">
            <div class="col-md-6">
                <div class="post">
                    <?php 
                     $imgUlr = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); 
                     $imgUlr = $imgUlr[0];
                     $title=get_post_meta(get_the_ID(), 'field-title', true);
                     $btnText=get_post_meta(get_the_ID(), 'read_more', true);
                     print_r($btnText);
                    
                ?>
                    <div class="post-image ">
                    <img src="<?php echo $imgUlr;?>" class='img-attchment'>
                    </div>
                    <div class="post-detail">
                        <h3><a href="<?php get_the_permalink(); ?>"><?php echo $title; ?></a></h3>
                        <p><?php the_content(); ?></p>
                        <a href="<?php get_the_permalink(); ?>" class="btn btn-ckt"><?php echo $btnText; ?></a>
                    </div>
                    <?php endwhile; ?>
                </div>
            
            </div>
            <div class="col-md-6 sub-posts">
                <?php 
                    $args = array(
                            'post_type'      =>'latestUpdate_slider',
                            'posts_per_page' =>3,
                            'order'          =>'DEC'
                        );
                    $args   = new WP_Query($args);
                    while($args->have_posts()):$args->the_post();
                     $feature_img=wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                     $feature_img=$feature_img[0];
                ?>
                <div class="row inline-post">
                    <img src="<?php echo $feature_img; ?>" class="img-fluid img-featured" >
                    <div class="news-desc">
                    <h4><a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></h4><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<section id="popular-news" class="popular">
    <div class="container">
        <div class="row">
            <h3 class="section_title">News by Category</h3>
        </div>
    </div>
    <div class="container category-name">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php 
                    $i = 0;
                      $html = '';
                    $terms = get_terms(array(
                        'taxonomy'=>'cat-news', 'orderby'=>'title','order'=>'asc', 'hide_empty'=>false)); 
                foreach ($terms as $term):
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active ?>" id="home-tab" data-toggle="tab" href="#<?php echo $term->slug ?>" role="tab" aria-controls="<?php echo $term->slug ?>" aria-selected="true"><?php echo $term->name; ?></a>
                </li>
                    <?php 
                        $args = array('post_type'=>'news_slider', 'posts_per_page'=>4, 'order'=>'desc', 'tax_query' => array( array('taxonomy'=>$term->taxonomy, 'field'=> 'term_id', 'terms' => array($term->term_id))));
                        $query = new WP_Query($args);
                    if($query->have_posts()):
                        $active = $i == 0 ? 'active' : '';
                        $html .='<div class="tab-pane fade show '.$active.'" id="'.$term->slug.'" role="tabpanel" aria-labelledby="'.$term->slug.'-tab">
                        <div class="row">';
                    while($query->have_posts()):$query->the_post();
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                            $content = has_excerpt() ? get_the_excerpt() : '';
                            $html .='<div class="col-md-4 ">
                            <div class="news-item">
                                <img src="'.$img[0].'" >
                                <div class="news-desc">
                                    <h4><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>'.$content.'
                                </div>  <!-- /popular-news -->

                            </div>   <!-- /news-item -->
                            </div>   <!-- /news-desc -->';
                     endwhile; 
                        $html .='</div> <!-- /tab-pane fade show -->
                        </div><!-- /row -->';
                     wp_reset_query(); 
                     else:
                        $html .='<p>No posts found::</p>';
                    endif;
                 $i++; endforeach; ?>     
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php echo $html; ?>
            </div>  <!-- /tab-content -->
        </div><!-- /row -->
    </div>    <!-- /container category-name -->
</section>   <!-- /popular-news -->
<?php get_footer(); ?>
