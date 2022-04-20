<?php
/**
 * contact Page template 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */
?>

<?php
// The user should be allowed to upload the Header image via WordPress Admin through Featured Image
$featured_img_url = get_the_post_thumbnail_url();
if(empty($featured_img_url)){
    $featured_img_url = get_stylesheet_directory_uri()."/assets/images/contact.jpg";
}

?>

      <div class="container">
        <div class="row">
            <!-- header image -->
            <div class="col-xs-12">
                <img class="img-responsive" src="<?php echo $featured_img_url;?>">
            </div>

                <!-- form -->
                <div class="row">
                        <div class="col-md-6 col-md-offset-1">
                            <h2 class="tm-text-secondary tm-mb-5">
                                <?php echo get_the_title();?>
                            </h2>

                            <div class="entry-content-page tm-mb-6">
                                <?php the_content(); ?>
                            </div>
                        </div>
                </div>

                <div class="row">
                        <!-- address -->
                        <div class="col-md-5 col-md-offset-1">
                            
                            <h3>Head Office</h3>
                            
                            <div>
                                <p>1385 Woodroffe Ave<br/>Nepean, ON K2G</p>
                            </div>
                            <div>
                              <p>contact@mybusiness.com<br>+331 45 31 64 32</p>
                            </div>

                        </div>

                        <!-- map -->
                        <div class="tm-location-container tm-mb-3">
                        <h3 class="tm-text-secondary tm-mb-4">Location</h3>
                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <style>
                              .mapouter {
                                position: relative;
                                text-align: right;
                                height: 300px;
                                width: 100%;
                              }
                              .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 300px;
                                width: 100%;
                              }
                            </style>
                          </div>
                        </div>
                        </div>

                        <!-- employee -->
                        <div class="col-md-5 col-md-offset-1">
                            <div>
                                <h3>Employee</h3>
                            </div>
                            <div>
                                <p>To apply for a job with our team, please feel free to send us your Linkedin profile link
                                    ou CV to : employment@mybusiness.com</p>
                            </div>
                        </div>
                </div>       
                    
                


        </div>
    </div>
