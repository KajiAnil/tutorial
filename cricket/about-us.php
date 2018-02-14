<?php
/**
  * Template Name: About Us Page 
*/
  ?>
  <?php get_header(); ?>
<section id="single-news-section" class="single-news">
    <div class="container">
        <div class="row justify-content-md-center">
            <?php 
                if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
            ?>    
           <div class="col-md-8 ">
            <h1><?php the_title(); ?></h1>
            <hr />
            <p><?php the_content(); ?></p>
            <?php 
                endwhile; 
                endif; 
            ?>
        <div class="author">
            <h1>Authors</h1>
            <?php 
                $team_data = get_post_meta(get_the_id(), 'team_data', false);
                foreach ($team_data as $team_info) {            
             ?>
            <hr />
            <h3><?php echo $team_info['name']; ?> : <?php echo $team_info['position']; ?></h3>
            <p><?php echo $team_info['desc']; ?></p>
            <p>E-mail : <a href="mailto:<?php echo $team_info['email']; ?>"><?php echo $team_info['email']; ?></a></p>
            <br />
            <?php } ?>

        </div>
        
    </div>      <!-- /col-md-8 -->
    <hr />
    <?php get_sidebar(); ?>
         </div>    <!-- /row justify-content-md-center -->
    </div>      <!-- /single-news -->
</section>   <!-- /section -->
<?php get_footer(); ?>

