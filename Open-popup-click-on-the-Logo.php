add_shortcode('portfolio_popup', 'popup_portfolio_company');
function popup_portfolio_company(){
    ob_start(); 

    $args = array('post_type' => 'portfolio' );                                              
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        echo '<div class="rt-container-fluid tlp-portfolio tlp-portfolio-container" id="tlp-portfolio-container-705" data-layout="layout1"> <div class="rt-row layout1 " data-title="Loading ...">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
?>
          
                <div class="tlp-col-md-4 tlp-col-sm-6 tlp-col-xs-12 tlp-single-item tlp-grid-item tlp-equal-height">
                    <div class="tlp-portfolio-item"> 
                        <div class="tlp-portfolio-thum tlp-item">
							<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?> 
                            <a href="#">
                                <img decoding="async" width="300" height="60" src="<?php echo $featured_img_url; ?>" class="img-responsive overlay" id="popupcompany1" alt="">
                            </a>    
                          <div class="tlp-overlay">
				          <p class="link-icon">
					     <a class="tlp-zoom" href="<?php echo $featured_img_url; ?>"><i class="demo-icon icon-zoom-in"></i></a>
					     <a href="#" id="popupcompany1" class="overlay"><i class="demo-icon icon-link-ext"></i></a>
				        </p>
			            </div>    
                        </div>
                        <!-- <div id="popupcompany1" class="overlay">
                        <div class="popup"> -->
                        <div class="tlp-content">
                            <div class="tlp-content-holder">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>        
                            </div>
                        </div>
                       <!--  </div>
                    </div> -->
                </div>
            </div>
         
<?php
        }
        echo '</div> </div>';
        // Restore original Post Data 
        wp_reset_postdata();
    } else {
        // no posts found
    }  

    return ob_get_clean(); 
}
