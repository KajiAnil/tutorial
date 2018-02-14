<?php
/**
  * Template Name: Under 19 Page 
*/
  ?>
  <?php 
get_header();

 ?>
 <div class="section">
        <div class="container">
            <div class="section-title">
                <?php 
                if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
            ?>
            <div class="player-content">
                <h3><?php the_content(); ?></h3>
            </div>
            <?php 
                endwhile; 
                endif; 
            ?>
            </div>

            <div class="testimonials owl-carousel">
                <?php 
                    $player_details = get_post_meta(get_the_id(), 'player_info', false);

                    foreach ($player_details as $player_detail) { 
                    $imgID = $player_detail['player_image'];
                    $player_image= wp_get_attachment_image_src($imgID, 'player_image', 'full');
                    $imgUrl = $player_image[0];  
                ?>
                <div class="testimonials-single">
                    <img src="<?php echo $imgUrl?>"" class="client-img">
                    <blockquote class="blockquote"><?php echo $player_detail['player_desc']; ?> </blockquote>
                    <h5 class="mt-4 mb-2"><?php echo $player_detail['player_name']; ?></h5>
                    <p class="text-primary"><?php echo $player_detail['player_nation']; ?></p>
                </div>
                <?php } ?>
            </div>

        </div>

    </div>
    <!-- // end .section -->

    <?php get_footer(); ?>