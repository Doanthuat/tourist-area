<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class ST_Dentcare_Rating_Notice {
    private $past_date;

    public function __construct() {
        $this->past_date = false == get_option('st_dentcare_maybe_later_time') ? strtotime( '-5 days' ) : strtotime('-15 days');

        if ( current_user_can('administrator') ) {
            if ( empty(get_option('st_dentcare_rating_dismiss_notice')) && empty(get_option('st_dentcare_rating_already_rated')) ) {
                add_action( 'admin_init', [$this, 'st_dentcare_check_theme_install_time'] );
            }
        }

        if ( is_admin() ) {
            add_action( 'admin_head', [$this, 'st_dentcare_enqueue_scripts' ] );
        }

        add_action( 'wp_ajax_st_dentcare_rating_dismiss_notice', [$this, 'st_dentcare_rating_dismiss_notice'] );
        add_action( 'wp_ajax_st_dentcare_rating_already_rated', [$this, 'st_dentcare_rating_already_rated'] );
        add_action( 'wp_ajax_st_dentcare_rating_maybe_later', [$this, 'st_dentcare_rating_maybe_later'] );
    }

    public function st_dentcare_check_theme_install_time() {   
        $install_date = get_option('st_dentcare_activation_time');

        if ( false !== $install_date && $this->past_date >= $install_date ) {
            add_action( 'admin_notices', [$this, 'st_dentcare_render_rating_notice' ]);
        }
    }

    public function st_dentcare_rating_maybe_later() {
        update_option('st_dentcare_maybe_later_time', true);
        update_option('st_dentcare_activation_time', strtotime('now'));
    }
    
    public function st_dentcare_rating_dismiss_notice() {
        update_option( 'st_dentcare_rating_dismiss_notice', true );
    }

    function st_dentcare_rating_already_rated() {    
        update_option( 'st_dentcare_rating_already_rated' , true );
    }

    public function st_dentcare_render_rating_notice() {
        if ( is_admin() ) {

            echo '<div class="notice st-rating-notice is-dismissible" style="border-left-color: #0073aa!important; display: flex; align-items: center;">
                        <div class="st-rating-notice-logo">
                        <img class="st-logo" src="'.get_theme_file_uri().'/inc/activation/img/logo-128x128.png">
                        </div>
                        <div>
                            <h3>Thank you for using ST Dentcare Theme to build this website!</h3>
                            <p>Could you please do us a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>
                            <p>
                                <a href="https://wordpress.org/support/theme/st-dentcare/reviews/?filter=5" target="_blank" class="st-you-deserve-it button button-primary">OK, you deserve it!</a>
                                <a class="st-maybe-later"><span class="dashicons dashicons-clock"></span> Maybe Later</a>
                                <a class="st-already-rated"><span class="dashicons dashicons-yes"></span> I Already did</a>
                            </p>
                        </div>
                </div>';
        }
    }

    public function st_dentcare_enqueue_scripts() { 
        echo "
        <script>
        jQuery( document ).ready( function() {

            jQuery(document).on( 'click', '.st-rating-notice .notice-dismiss', function(e) {
                e.preventDefault();
                jQuery(document).find('.st-rating-notice').slideUp();
                jQuery.post({
                    url: ajaxurl,
                    data: {
                        action: 'st_dentcare_rating_dismiss_notice',
                    }
                })
            });

            jQuery(document).on( 'click', '.st-maybe-later', function() {
                jQuery(document).find('.st-rating-notice').slideUp();
                jQuery.post({
                    url: ajaxurl,
                    data: {
                        action: 'st_dentcare_rating_maybe_later',
                    }
                })
            });
        
            jQuery(document).on( 'click', '.st-already-rated', function() {
                jQuery(document).find('.st-rating-notice').slideUp();
                jQuery.post({
                    url: ajaxurl,
                    data: {
                        action: 'st_dentcare_rating_already_rated',
                    }
                })
            });
        });
        </script>

        <style>
            .st-rating-notice {
              padding: 0 15px;
            }

            .st-rating-notice-logo {
                margin-right: 20px;
                width: 100px;
                height: 100px;
            }

            .st-rating-notice-logo img {
                max-width: 100%;
            }

            .st-rating-notice h3 {
              margin-bottom: 0;
            }

            .st-rating-notice p {
              margin-top: 3px;
              margin-bottom: 15px;
            }

            .st-already-rated,
            .st-maybe-later {
              text-decoration: none;
              margin-left: 12px;
              font-size: 14px;
              cursor: pointer;
            }

            .st-already-rated .dashicons,
            .st-maybe-later .dashicons {
              vertical-align: sub;
            }

            .st-logo {
                height: 100%;
                width: auto;
            }

        </style>
        ";
    }
}

new ST_Dentcare_Rating_Notice();