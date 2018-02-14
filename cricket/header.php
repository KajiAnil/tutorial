<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right');?> <?php bloginfo( 'name' ) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="social-icons">
        <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <section id="marque-text">
        <div class="container">
            <marquee id="topmarquee">
                <p>
                <?php 
                    $args = array('post_type'=>'news_slider','posts_per_page'=>6,'order'=>'asc');
                    $my_query = new WP_Query($args);
                    while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" ><?php the_title(); ?> | </a>
                    <?php endwhile; ?> 
                </p>
            </marquee>
        </div>
    </section>
    <header id="header-section" class="header">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernavbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                <div class="collapse navbar-collapse" id="headernavbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php 
                    $args= array(
                      'theme_location' => 'primary',
                      'container'      => 'ul',
                      'menu_class'     => 'navbar-nav mr-auto',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker()  
                    );
               ?>
              <?php wp_nav_menu($args); ?>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-ckt ripple" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

            </div>
        </nav>

    </header>
    <section id="site-info-section" class="site-info">
        <div class="container">
            <div class="row site-info-row">
                <div class="col-md-4">
                    <div class="logosection">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php  
                              if ( has_custom_logo() )  
                                {
                                    echo the_custom_logo();
                                } 
                                 else{
                                    echo '<h3 class="text-logo">'. get_bloginfo( 'name' ) .'</h3>'; 
                                }
                                
                                ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php 
                        $my_query = new WP_Query('page_id=17');
                        while ($my_query->have_posts()) : $my_query->the_post();?>
                        <?php endwhile; ?>
                        <?php 
                        $feature_img=wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $img=wp_get_attachment_image_src(get_post_meta( get_the_ID(),'field-image', 'full'));?>
                    <div class="add_banner">
                        <img src="<?php echo $feature_img[0] ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="menu-section" class="menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                <div class="collapse navbar-collapse" id="mainnavbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php 
                    $args= array(
                      'theme_location' => 'header',
                      'container'      => 'ul',
                      'menu_class'     => 'navbar-nav mr-auto',
                      //Process nav menu using our custom nav walker
                      'walker' => new wp_bootstrap_navwalker()  
                    );
               ?>
              <?php wp_nav_menu($args); ?>

                    </ul>
                </div>

            </div>

        </nav>

    </section>
