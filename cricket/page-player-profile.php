<?php
/**
* Template Name: Player Profile Page
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
				<div id="playerProfileWrapper">
					<?php
						$id = get_the_ID();
						
						$nationalPlayer_details = get_post_meta( $id, 'national_player', false );

						// print_r($nationalPlayer_details);


						foreach ($nationalPlayer_details as $nationalPlayer_detail) {
						$imgID = $nationalPlayer_detail['image'];
						$image= wp_get_attachment_image_src($imgID, 'image', 'full');
						$imgUrl = $image[0];
						?>
						<div id="playerProfileContent">
							<div id="content1">
								<div id="playerPersonalInfo">
									
									<h1 class="floatMilaune"><?php echo $nationalPlayer_detail['name']; ?></h1>
									<div class="playerProfileSocial">
										<!-- AddThis Button BEGIN -->
										<div class="addthis_toolbox addthis_default_style ">
											<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
											<a class="addthis_button_tweet"></a>
											<a class="addthis_counter addthis_pill_style"></a>
										</div>
										<!-- AddThis Button END -->
									</div>
									<div style=" clear:both"></div>
									<hr class="bannerReplace" />
									<img src="<?php echo $imgUrl; ?>" alt='Paras Khadka' width="160" height="200">
									<div class="table">
										<?php echo do_shortcode($nationalPlayer_detail['table_1']); ?>
									</div><hr>
									<div class="table-abt">
										<h4>About The Player:</h4>
										<?php echo do_shortcode($nationalPlayer_detail['table_4']); ?>
									</div><hr>
								</div>
							</div>
							
							<div style=" clear:both">
								
							</div>
						</div>
						<div id="playerStat1">
							<h2>Batting & Fielding Statistics</h2>
							<?php echo do_shortcode( $nationalPlayer_detail['table_2']); ?>
						</div>
						<div id="playerStat2">
							<h2>Bowling Statistics</h2>
							<?php echo do_shortcode( $nationalPlayer_detail['table_3']); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			 <?php 
                endwhile; 
                endif; 
            ?>
			<?php get_sidebar(); ?>
			</div>    <!-- /row justify-content-md-center -->
			</div>      <!-- /single-news -->
			</section>   <!-- /section -->
			<?php get_footer(); ?>