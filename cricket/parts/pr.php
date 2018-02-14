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





// parash

<div id="playerProfileWrapper">
                    <div id="playerProfileContent">
                        <div id="content1">
                            <div id="playerPersonalInfo">
                                <?php
                                            $ID=get_the_id();
                                            print_r($ID);
                                            $nationalPlayer_details = get_post_meta($ID, 'national_player', false);
                                            foreach ($nationalPlayer_details as $nationalPlayer_detail) {
                                                $imgID = $nationalPlayer_detail['nationalPlayer_image'];
                                                        $nationalPlayer_image= wp_get_attachment_image_src($imgID, 'nationalPlayer_image', 'full');
                                                        $imgUrl = $nationalPlayer_image[0];
                                ?>
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
                                <div class="table-wrap">
                                    <?php echo $nationalPlayer_detail['table_3']; ?><hr>
                                </div>  
                            </div>
                        </div>
                        
                        <div style=" clear:both">
                            
                        </div>
                    </div>
                    <div id="playerStat1">
                        <h2>Batting & Fielding Statistics</h2>
                        <?php echo $nationalPlayer_detail['table_1']; ?>
                    </div>
                    <div id="playerStat2">
                        <h2>Bowling Statistics</h2>
                        <<?php echo $nationalPlayer_detail['table_2']; ?>
                    </div>
                    <?php } ?>
</div>





<!-- jquery -->
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    
    $("input").keyup(function(){
    var intext = $("input").val();
        $("#name").text(intext);
    });
});
</script>
</head>
<body>

<input type="text">

<p>Write something in the input field, and then press enter or click outside the field. <strong id="name"> </strong> </p>

</body>
</html>



<?php 

 

/*

@package crickettheme
  ===============   
    ADMIN PAGE
  ===============

*/

function cricket_add_admin_page() {

        //generation of the admin page function
    add_menu_page( 'Cricket Theme Options', 'Cricket (NCSS)', 'manage_options', 'ncss_cricket', 'cricket_theme_create_page', get_template_directory_uri() . '/images/cricket-icon.png', 110);

    // Generate  admin Sub Pages function
    add_submenu_page( 'ncss_cricket', 'Cricket Sidebar Options', 'Sidebar', 'manage_options', 'ncss_cricket', 'cricket_theme_create_page' );

    add_submenu_page( 'ncss_cricket', 'Cricket Theme Options', 'Theme Options', 'manage_options', 'ncss_cricket_theme', 'cricket_theme_support_page' );

    // Generate  admin Sub Pages function
    add_submenu_page( 'ncss_cricket', 'Cricket Css Options', 'Custom CSS', 'manage_options', 'ncss_cricket_css', 'cricket_theme_settings_page' );

    //Activate Custom Setting
    add_action( 'admin_init', 'cricket_custom_settings');
}
add_action( 'admin_menu', 'cricket_add_admin_page');

function cricket_custom_settings(){
    //Sidebar Options
    register_setting( 'cricket-settings-group', 'profile_picture' );
    register_setting( 'cricket-settings-group', 'first_name' );
    register_setting( 'cricket-settings-group', 'last_name' );
    register_setting( 'cricket-settings-group', 'user_description' );
    register_setting( 'cricket-settings-group', 'twitter_handler' , 'cricket_sanitize_twitter_handler');
    register_setting( 'cricket-settings-group', 'facebook_handler' );
    register_setting( 'cricket-settings-group', 'gplus_handler' );
    register_setting( 'cricket-settings-group', 'instagram_handler' );
    

    add_settings_section( 'cricket-sidebar-options', 'Sidebar Options', 'cricket_sidebar_option', 'ncss_cricket' );

    add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'cricket_sidebar_profile', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-name', 'Full Name', 'cricket_sidebar_name', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-description', 'Description', 'cricket_sidebar_description', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-facebook', 'Facebook Handler', 'cricket_sidebar_facebook', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-twitter', 'Twitter Handler', 'cricket_sidebar_twitter', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-instragram', 'Instagram Handler', 'cricket_sidebar_instagram', 'ncss_cricket', 'cricket-sidebar-options');
    add_settings_field( 'sidebar-gplus', 'Google+ Handler', 'cricket_sidebar_gplus', 'ncss_cricket', 'cricket-sidebar-options');

    // Theme Support Options
    register_setting( 'cricket-theme-support', 'post_formats', 'cricket_post_formats_callback' );

    add_settings_section( 'cricket-theme-options', 'Theme Options', 'cricket_theme_options', 'ncss_cricket_theme' );

    add_settings_field( 'post_formats', 'Posts Formats', 'cricket_post_formats', 'ncss_cricket_theme', 'cricket-theme-options');

}

//Post Formata Callback Function
function cricket_post_formats_callback($input){
    return $input;
}

function cricket_theme_options(){
    echo 'Activate and Deactivate specific Theme Support Options';
}

function cricket_post_formats(){
    $options = (get_option('post_formats') );
    $formats = array('aside', 'galley', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    $output = '';
    foreach ($formats as $format) {
        $checked = ( @$options[$format] == 1 ? 'checked' : '');
        $output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="'.$checked.'" />'.$format.'</label><br>';
    }
    echo $output;
}

//Sidebar Option Functions
function cricket_sidebar_option(){
    echo 'Customize your Sidebar Information';
}

function cricket_sidebar_profile(){

    $picture = esc_attr(get_option('profile_picture') );
    echo '<input type = "button" class = "button button-secondary" value ="Upload Profile Picture" id="upload-button"/><input type = "hidden" id = "profile-picture" name ="profile_picture" value ="'.$picture.'"/>';
}


function cricket_sidebar_name(){
    $firstName = esc_attr(get_option('first_name') );
    $lastName = esc_attr(get_option('last_name') );
    echo '<input type = "text" name ="first_name" value ="'.$firstName.'" placeholder = " First Name" id ="cricket-firstname"/> <input type = "text" name ="last_name" value ="'.$lastName.'" placeholder = " Last Name"/>';
}

function cricket_sidebar_description(){
    $description = esc_attr(get_option('user_description') );
    echo '<input type = "text" name ="user_description" value ="'.$description.'" placeholder = "User Description"/><p class = "description">Write something smart.</p>';
}

  // Social Media Handler
function cricket_sidebar_twitter(){
    $twitter = esc_attr(get_option('twitter_handler') );
    echo '<input type = "text" name ="twitter_handler" value ="'.$twitter.'" placeholder = " Twitter Handler"/><p class = "description">Input your Twitter username without the @ character.</p>';
}


function cricket_sidebar_facebook(){
    $facebook = esc_attr(get_option('facebook_handler') );
    echo '<input type = "text" name ="facebook_handler" value ="'.$facebook.'" placeholder = " Facebook Handler"/>';
}

function cricket_sidebar_gplus(){
    $gplus = esc_attr(get_option('gplus_handler') );
    echo '<input type = "text" name ="gplus_handler" value ="'.$gplus.'" placeholder = " Google+ Handler"/>';
}

function cricket_sidebar_instagram(){
    $instagram = esc_attr(get_option('instagram_handler') );
    echo '<input type = "text" name ="instagram_handler" value ="'.$instagram.'" placeholder = " Instagram Handler"/>';
}

// Activate the  sanitization settings
function cricket_sanitize_twitter_handler($input) {
    $output = sanitize_text_field( $input );
    $output = str_replace('@', '', $output);
    return $output;
}

//Template submenu function
function cricket_theme_create_page(){
    require_once(get_template_directory(). '/inc/templates/cricket-admin.php');
}

function cricket_theme_support_page(){
    require_once(get_template_directory(). '/inc/templates/cricket-theme-support.php');
}

function cricket_theme_settings_page(){
    //// Generate of our admin sub pages
}








/*.cricket-general-form,
.cricket-sidebar-preview{
    display: inline-block;
    float: left;
}

.cricket-sidebar-preview{
    width: 280px;
    background-color: #1F1F1F;
    padding: 20px;
    text-align: center;
    margin-right: 20px; 
}
.cricket-sidebar{
    display: block;
    text-align: center;
}
h1.cricket-username,
h2.cricket-description{
    font-weight: 100;
    color: #fff;
}
h1.cricket-username{
    font-size: 24px;
    margin:0 0 10px;
}
h2.cricket-description{
    font-size: 13px;
    margin:0 0 20px;
}

.image-container{
    display: block;
    width: 100%;
    overflow: hidden;
    text-align: center;
}
.profile-picture{
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 50%;
    margin:20px auto;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}*/