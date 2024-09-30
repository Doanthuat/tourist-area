<section id="aboutus-section" class="aboutus-area home-aboutus">
    <div class="abtcir"></div>
    <?php
        $aboutus_image = get_theme_mod('aboutus_image'); 
        $aboutus_image2 = get_theme_mod('aboutus_image2'); 
    ?>
	<div class="<?php if(esc_attr(get_theme_mod('online_startup_business_aboutus_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('online_startup_business_aboutus_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
    	<div class="row m-0">  
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 wrapper">
                <div class="abt-image">
                    <div class="abticon">   
                        <?php 
                            echo '<img src="'.get_template_directory_uri().'/assets/images/abt-icn.png" class="peccular-aboutus-imgboxshape" />';
                        ?>          
                    </div>
        			<div class="abtimg1">	
                        
                        <?php 
                            if(!empty($aboutus_image)){
                                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_image).'" class="peccular-aboutus-imgboxshape" />';
                            }else{
                                echo '<img src="'.get_template_directory_uri().'/assets/images/abt2.png" />';
                            }
                        ?>
                        <div class="img-overlay"></div>	
        			
        			</div>
                    <div class="abtimg2">
                        <?php 
                            if(!empty($aboutus_image2)){
                                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($aboutus_image2).'" class="peccular-aboutus-imgboxshape" />';
                            }else{
                                echo '<img src="'.get_template_directory_uri().'/assets/images/default.png" />';
                            }
                        ?>
        			</div>
                    <div class="row about-exp-box">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 about-exp-txt" style="text-transform:  capitalize ">
                            <?php echo esc_html(get_theme_mod('aboutus_yearofexperiencenum')); ?><span><?php echo esc_html(get_theme_mod('aboutus_yearofexperiencetext')); ?></span>
                        </div>
                        <svg class="small-circleex" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42">
                            <defs>
                                <filter id="Ellipse_24" x="0" y="0" width="42" height="42" filterUnits="userSpaceOnUse">
                                <feOffset dy="2" input="SourceAlpha"></feOffset>
                                <feGaussianBlur stdDeviation="5" result="blur"></feGaussianBlur>
                                <feFlood flood-opacity="0.161"></feFlood>
                                <feComposite operator="in" in2="blur"></feComposite>
                                <feComposite in="SourceGraphic"></feComposite>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Ellipse_24)">
                                <circle id="Ellipse_24-2" data-name="Ellipse 24" cx="6" cy="6" r="6" transform="translate(15 13)" fill="#fff" opacity="0.65"></circle>
                            </g>
                        </svg>
                    </div>
    			</div>
    		</div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 position-relative">
                <div class="abt-dbx">
                    <h3><?php echo esc_html(get_theme_mod('aboutus_heading')); ?></h3>
                    <h2><?php echo esc_html(get_theme_mod('aboutus_subheading')); ?></h2>
                    <p><?php echo esc_html(get_theme_mod('aboutus_description')); ?></p>
                    <div class="box box1 ">
                        <div class="row mr-0">
                            <div class="col-lg-1 col-md-1 col-sm-2">    
                               <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-10">
                                <h4><?php echo esc_html(get_theme_mod('aboutus_box1title')); ?></h4>
                            </div>
                             <p><?php echo esc_html(get_theme_mod('aboutus_box1description')); ?></p>
                            <div class="clearfix"></div>
                        </div>    
                       
                    </div>
                    <div class="box box2 mr-0">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-2">    
                               <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-10">
                                <h4><?php echo esc_html(get_theme_mod('aboutus_box2title')); ?></h4>
                            </div>
                            <p><?php echo esc_html(get_theme_mod('aboutus_box2description')); ?></p>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                    <div class="abt-btn">
                        <a href="<?php echo esc_html(get_theme_mod('aboutus_readmorebtn_link')); ?>">
                            <?php esc_html_e('About Us','online-startup-business'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
