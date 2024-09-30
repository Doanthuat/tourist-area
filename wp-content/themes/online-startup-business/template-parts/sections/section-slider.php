<section id="slider-section" class="slider-area home-slider">
  <!-- start of hero --> 
    <section class="hero-slider hero-style">
        <div class="online_startup_businessswiper-container">
            <div class="swiper-wrapper">
              <?php for($p=1; $p<6; $p++) { ?>
              <?php if( get_theme_mod('slider'.$p,false)) { ?>
              <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
              <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
              <?php 
                if(has_post_thumbnail()){
                  $img = esc_url($image[0]);
                }
                if(empty($image)){
                  $img = get_template_directory_uri().'/assets/images/default.png';
                }

              ?>
                <div class="online_startup_businessswiper-slide">
                  <div class="slider-line"></div>
                  <div class="slider-line2"></div>
                    <div class="online_startup_businessslide-inner slide-bg-image">  
                      <div class="topimg">
                         <?php 
                            if(!empty($stp_image)){
                                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($stp_image).'" class="peccular-aboutus-imgboxshape" />';
                            }else{
                                echo '<img src="'.get_template_directory_uri().'/assets/images/stp.png" />';
                            }
                        ?>
                      </div>
                        <div class="row mr-0">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="slidercontent">
                                    <div class="slide-title"><h2><?php the_title_attribute(); ?></h2></div> 
                                    <div class="slide-text"><?php the_excerpt(); ?></div>
                                    <div class="slider-btn">
                                        <a  href="<?php echo esc_url( get_permalink() ); ?>">
                                          <?php esc_html_e('DISCOVER MORE','online-startup-business'); ?>
                                        </a>
                                    </div>  
                                    <div class="planesvg">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="538" height="196.657" viewBox="0 0 538 196.657">
                                          <g id="Group_159" data-name="Group 159" transform="translate(-249.379 -488.973)">
                                            <path id="Path_10" data-name="Path 10" d="M222.91,536.954c159.9-2.39,271.3,163.971,405.724,172.337s104.583,0,104.583,0" transform="translate(26.476 -47.457)" fill="none" stroke="#ef6135" stroke-width="1" stroke-dasharray="5"></path>
                                            <path id="Icon_awesome-telegram-plane" data-name="Icon awesome-telegram-plane" d="M59.128,4.527l-8.948,42.2c-.675,2.978-2.436,3.72-4.937,2.317L31.608,39l-6.579,6.327a3.424,3.424,0,0,1-2.74,1.337l.98-13.886L48.539,9.941c1.1-.98-.238-1.522-1.708-.543l-31.24,19.67L2.142,24.859c-2.925-.913-2.978-2.925.609-4.329L55.356.265C57.791-.649,59.922.808,59.128,4.527Z" transform="translate(733.637 615.5) rotate(25)" fill="#ef6135"></path>
                                          </g>
                                      </svg>  
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="sl-r-img">
                                    <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">   
                                    <div class="slidersvg2"> </div> 
                                </div>
                            </div>
                        </div>
                        <div class="bmimg">
                         <?php 
                            if(!empty($sbm_image)){
                                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($sbm_image).'" class="peccular-aboutus-imgboxshape" />';
                            }else{
                                echo '<img src="'.get_template_directory_uri().'/assets/images/sbm.png" />';
                            }
                        ?>
                      </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php } } ?>
                <div class="clear"></div> 

            </div>
           <!-- swipper controls -->
            <!-- <div class="online_startup_businessswiper-pagination"></div> -->
            <!-- <div class="online_startup_businessswiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="online_startup_businessswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
        </div>
    </section>
    
  <!-- end of hero slider -->
</section>

