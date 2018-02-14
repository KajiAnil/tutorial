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
                    <li><a href="'.get_the_permalink().'">'.get_the_title().'</a> <br>'.$content.'</li>';
                endwhile; 
                    $html .='
                    </ul></div>   <!-- /tab-pane fade -->';
                    wp_reset_query(); 
                else:
                    $html .='<p>No posts found::</p>';
                endif;
                $i++; endforeach; 
                ?> 
             </div>
        </nav>    
        <div class="tab-content" id="nav-tabContent">
            <?php echo $html; ?>
        </div>   <!-- /tab-content -->
    </div>    <!-- /news-detail -->
</div>  <!-- /col-md-4 -->