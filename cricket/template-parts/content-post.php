<div class="news-detail">
    <?php  
        $feature_img= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
    ?>
    <h3 class="news-title"><?php the_title() ?></h3>
    <img src="<?php echo $feature_img[0] ?>" class="img-fluid img-post" alt="Image Detail">
    <p class="text-news">
        <?php 
            the_content(); 
        ?>
    </p>
 </div>