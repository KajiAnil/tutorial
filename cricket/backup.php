<div class="col-md-4 ">
  <div class="news-detail">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <?php 
              $i = 0;
              $html = "";
              $terms = get_terms(array('taxonomy'=>'cat-news', 'orederby'=>'title','order'=>'asc','hide_emplty'=>false));
            foreach ($terms as $term) :
            ?>
              <a class="nav-item nav-link $active" id="nav-home-tab" data-toggle="tab" href="#nav-<?php echo $term->slug ?>" role="tab" aria-controls="nav-<?php echo $term->slug ?>" aria-selected="true"><?php echo $term->name ?> </a>
              <?php 
                    $args = array(
                      'post_type'=>'news_slider',
                      'posts_per_page'=>4,
                      'order'=>'desc',
                      'tax_query'=> array(array('taxonomy'=>$term->taxonomy, 'field'=>'term_id','terms'=>array($term->term_id))));
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        $active = $i == 0 ? 'active' : '';
                        $html .= '<div class="tab-pane fade show' .$active.'" id="nav-'.$term->slug.'" role="tabpanel" aria-labelledby="nav-'.$term->slug.'-tab">';
                    while ($query->have_posts()):$query->the_post();
                        $content = has_excerpt() ? get_the_excerpt() : '';
                        $html .= '<h3 class="news-category">'.the_title().'</h3>
                        <ul class="latest-news">
                        <li><a href="'.get_the_permalink().'">'.$content.'</a></li>
                        ';
                    endwhile;
                        wp_reset_query();
                        $html .='</div>';
                        else:
                        $html .='<p>No posts found::</p>';
                    endif;
            $i++; 
            endforeach;
         ?>
</nav>
</ul>
<div class="tab-content" id="nav-tabContent">
<?php echo $html; ?>
</div>
</div>
</div>
















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
            </div>
            <div class="col-md-4 ">
                <div class="news-detail">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <?php 
                                $i = 0;
                                $html = '';
                                $terms = get_terms(array(
                                    'taxonomy'=>'cat-news', 
                                    'orderby'=>'title',
                                    'order'=>'asc',
                                    'exclude' => array(11),
                                     'hide_empty'=>false)); 
                                foreach ($terms as $term):
                                    $active = $i == 0 ? 'active' : '';
                            ?>
                            <a class="nav-item nav-link <?php echo $active ?>" id="nav-home-tab" data-toggle="tab" href="#nav-<?php echo $term->slug ?>" role="tab" aria-controls="nav-<?php echo $term->slug ?>" aria-selected="true"><?php echo $term->name; ?></a>
                          <!-- /nav nav-tabs -->
                        <?php 
                            $args = array('post_type'=>'news_slider', 'posts_per_page'=>3, 'order'=>'desc', 'tax_query' => array( array('taxonomy'=>$term->taxonomy, 'field'=> 'term_id', 'terms' => array($term->term_id))));
                            $query = new WP_Query($args);
                        if($query->have_posts()):
                            $active = $i == 0 ? 'active' : '';
                            $html .=' <div class="tab-pane fade show '.$active .'" id="nav-'.$term->slug.'" role="tabpanel" aria-labelledby="nav-'.$term->slug.'-tab"><h3 class="news-category">'.$term->name.' News</h3><ul class="latest-news">';
                        while($query->have_posts()):$query->the_post();
                            $content = has_excerpt() ? get_the_excerpt() : '';
                            $html .='
                                <li><a href="'.the_permalink().'">'.get_the_title().'</a></h4>'.$content.'</li>';
                    endwhile; 
                        $html .='
                    </ul></div>   <!-- /tab-pane fade -->';
                     wp_reset_query(); 
                     else:
                        $html .='<p>No posts found::</p>';
                    endif;
                 $i++; endforeach; ?> 
             </div>
                 </nav>    
                 <div class="tab-content" id="nav-tabContent">
                    <?php echo $html; ?>
                </div>   <!-- /tab-content -->
                </div>    <!-- /news-detail -->
                
            </div>  <!-- /col-md-4 -->
        </div>    <!-- /row justify-content-md-center -->
    </div>      <!-- /single-news -->
</section>   <!-- /section -->
<?php get_footer(); ?>