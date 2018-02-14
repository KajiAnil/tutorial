
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
                        'taxonomy' =>'cat-news',
                        'orderby'  =>'title',
                        'order'    =>'asc',
                        'hide_empty'=>false
                    ));
                    foreach ($terms as $term) :
                    ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active ?>" id="home-tab" data-toggle="tab" href="#<?php echo $term->slug ?>" role="tab" aria-controls="<?php $term->slug ?>" aria-selected="true"><?php echo $term->name; ?></a>
                </li>
                <?php 
                     $args = array(
                        'post_type'=>'news_slider',
                        'posts_per_page'=>3,
                        'oreder'        =>'des',
                        'tex_query'=>array(
                            array(
                                'taxonomy'=>$term->taxonomy,
                                'fiels'=>'term_id',
                                'terms'=>array(
                                    $term->term_id
                                ) )) );
                    $query= new WP_Query($args);
                    if ($query->hsve_posts()) :
                        $active = $i == 0 ? 'active' : '';
                        $html .='<div class="tab-pane fade show '.$active.'" id="'.$term->slug.'" role="tabpanel" aria-labelledby="'.$term->slug.'-tab">
                    <div class="row">';
                        while($query->have_posts()):$query->thepost();
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                            $content = has_excerpt() ? get_the_excerpt() : '';
                            $html .='<div class="col-md-4 ">
                            <div class="news-item">
                                <img src="'.$img[0].'" >
                                <div class="news-desc">
                                    <h4><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>'.$content.'
                                </div>
                            </div>
                            </div>';
                        endwhile;
                        $html .='</div></div>';
                         wp_reset_query(); 
                    else:
                    endif;
                    $i++; endforeach;
                ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php echo $html; ?>
                    </div>
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
                                </div>
                            </div>
                            </div>';
                     endwhile; 
                        $html .='</div></div>';
                     wp_reset_query(); 
                     else:
                        $html .='<p>No posts found::</p>';
                    endif;
                 $i++; endforeach; ?>     
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php echo $html; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>