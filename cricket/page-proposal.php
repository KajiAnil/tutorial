<?php
/**
* Template Name: Propasal Page
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
					<div id="playerProfileContent">
						<div id="content1">
							<div id="playerPersonalInfo">
								
								<h1 class="floatMilaune">Gyanendra Malla</h1>
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
								<img src="<?php echo get_template_directory_uri(); ?> . /images/Gyanendra_Malla.jpg" alt='Paras Khadka' width="160" height="200">
								<table>
									<tr><td class="playerBold">Birth Date:</td><td>16 Sep 1990</td></tr>
									<tr><td class="playerBold">Current Age:</td><td>27 Years 4 Months 10 Days</td></tr>
									<tr><td class="playerBold">Height:</td><td></td></tr>
									<tr>
										<td class="playerBold">Major Teams:</td>
										<td>
											
										</td>
									</tr>
									<tr><td class="playerBold">Playing Role:</td><td>Top Order Batsman</td></tr>
									<tr><td class="playerBold">Batting Style:</td><td>Right-handed</td></tr>
									<tr><td class="playerBold">Bowling Style:</td><td>N/A</td></tr>
								</table>
								<h4>About The Player:</h4>
								<p></p>
								
							</div>
							
							<div style=" clear:both"></div>
						</div>
						<div id="playerStat1">
							<h2>Batting & Fielding Statistics</h2>
							<table>
								<tr><th></th><th>Mats</th><th>Inns</th><th>NO</th><th>Runs</th><th>HS</th><th>Avg</th>
								<th>BF</th><th>SR</th><th>100</th><th>50</th><th>4s</th><th>6s</th><th>Ct</th><th>St</th></tr>
								
								<tr>
									<td>T20 National</td>
									<td>21</td>
									<td>17</td>
									<td>7</td>
									<td>409</td>
									<td>69</td>
									<td>40.9</td>
									<td>362</td>
									<td>112.98</td>
									<td>-</td>
									<td>5</td>
									<td>38</td>
									<td>8</td>
									<td>9</td>
									<td>1</td>
								</tr>
								
								
								<tr>
									<td>T20 International</td>
									<td>47</td>
									<td>43</td>
									<td>5</td>
									<td>746</td>
									<td>52</td>
									<td>19.63</td>
									<td>778</td>
									<td>95.89</td>
									<td>-</td>
									<td>1</td>
									<td>53</td>
									<td>15</td>
									<td>20</td>
									<td>5</td>
								</tr>
								
								
								
								<tr>
									<td>One Day International</td>
									<td>7</td>
									<td>6</td>
									<td>-</td>
									<td>100</td>
									<td>56</td>
									<td>16.67</td>
									<td>285</td>
									<td>35.09</td>
									<td>-</td>
									<td>1</td>
									<td>19</td>
									<td>1</td>
									<td>3</td>
									<td>-</td>
								</tr>
								
							</table>
						</div>
						<div id="playerStat2">
							<h2>Bowling Statistics</h2>
							<table>
								<tr><th></th><th>Mats</th><th>Inns</th><th>Balls</th><th>Runs</th><th>Wkts</th><th>NB</th><th>WD</th><th>Avg</th>
								<th>Econ</th><th>BB</th><th>SR</th></tr>
								
								<tr>
									<td>T20 National</td>
									<td>21</td>
									<td>6</td>
									<td>60</td>
									<td>91</td>
									<td>-</td>
									<td>-</td>
									<td>6</td>
									<td>-</td>
									<td>9.1</td>
									<td>-</td>
									<td>-</td>
								</tr>
								
								
								<tr>
									<td>T20 International</td>
									<td>47</td>
									<td>1</td>
									<td>1</td>
									<td>4</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>40</td>
									<td>0 / 0</td>
									<td>-</td>
								</tr>
								
								
								
								<tr>
									<td>One Day International</td>
									<td>10</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
									<td>-</td>
								</tr>
								
							</table>
						</div>
					</div>
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