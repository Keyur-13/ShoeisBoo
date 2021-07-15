<?php

add_action( 'customize_register', 'omg_blog_customize_register', 999 );
function omg_blog_customize_register( $wp_customize ){
    $wp_customize->get_section('homepage')->title = esc_html__( 'Homepage Blog Settings', 'omg-blog' );
    $wp_customize->get_section('homepage')->priority = 1;
}

add_action( 'wp_enqueue_scripts', 'omg_blog_chld_thm_parent_css' );
function omg_blog_chld_thm_parent_css() {

    $my_theme = wp_get_theme();
    $theme_version = $my_theme->get( 'Version' );

    wp_enqueue_style( 
    	'omg_blog_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	)
    );

    wp_enqueue_script( 'omg_blog_scripts', get_stylesheet_directory_uri() . '/script.js', array('jquery'), $theme_version );
    
}

add_filter( 'bizberg_progress_bar_status', function(){
    return 'block';
});

add_filter( 'bizberg_progress_bar_color', function(){
    return '#d85726';
});

add_filter( 'bizberg_header_site_title_color_sticky_menu', function(){
    return '#fff';
});

add_filter( 'bizberg_header_site_tagline_color_sticky_menu', function(){
    return '#fff';
});

add_filter( 'bizberg_header_menu_separator_sticky_menu', function(){
    return 'rgba(255,255,255,0)';
});

add_filter( 'bizberg_header_menu_text_color_sticky_menu', function(){
    return '#fff';
});

add_filter( 'bizberg_header_navbar_background_1_sticky_menu', function(){
    return '#2c2825';
});

add_filter( 'bizberg_header_navbar_background_2_sticky_menu', function(){
    return '#2c2825';
});

add_filter( 'bizberg_header_menu_toggle_color_mobile', function(){
    return '#fff';
});

add_filter( 'bizberg_background_color_1', function(){
    return '#d85726';
});

add_filter( 'bizberg_background_color_2', function(){
    return '#262320';
});

add_filter( 'bizberg_top_bar_border_bottom_color', function(){
    return 'rgba(255,255,255,0)';
});

add_filter( 'bizberg_top_bar_icon_separator_color', function(){
    return 'rgba(255,255,255,0)';
});

// Start Body Font
add_filter( 'bizberg_body_content_typo_status', function(){
    return true;
});
add_filter( 'bizberg_typography_body_content', function(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => 'regular',
        'font-size'      => '15px',
        'line-height'    => '1.75'
    ];
});

// Start Heading 1
add_filter( 'bizberg_body_typo_heading_1_status', function(){
    return true;
});
add_filter( 'bizberg_typography_h1', function(){
    return [
        'font-family'    => 'Roboto Slab',
        'variant'        => '500',
        'font-size'      => '48.83px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});
add_filter( 'bizberg_typography_h1_tablet', function(){
    return '45.78';
});
add_filter( 'bizberg_typography_h1_mobile', function(){
    return '42.72';
});

// Start Heading 2
add_filter( 'bizberg_body_typo_heading_2_status', function(){
    return true;
});
add_filter( 'bizberg_typography_h2', function(){
    return [
        'font-family'    => 'Roboto Slab',
        'variant'        => '500',
        'font-size'      => '39.06px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});
add_filter( 'bizberg_typography_h2_tablet', function(){
    return '36.62';
});
add_filter( 'bizberg_typography_h2_mobile', function(){
    return '34.18';
});

// Start Heading 3
add_filter( 'bizberg_body_typo_heading_3_status', function(){
    return true;
});
add_filter( 'bizberg_typography_h3', function(){
    return [
        'font-family'    => 'Roboto Slab',
        'variant'        => '500',
        'font-size'      => '31.25px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});
add_filter( 'bizberg_typography_h3_tablet', function(){
    return '29.30';
});

add_filter( 'bizberg_typography_h3_mobile', function(){
    return '27.34';
});

// Start Heading 4
add_filter( 'bizberg_body_typo_heading_4_status', function(){
    return true;
});
add_filter( 'bizberg_typography_h4', function(){
    return [
        'font-family'    => 'Roboto Slab',
        'variant'        => '500',
        'font-size'      => '25px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});
add_filter( 'bizberg_typography_h4_tablet', function(){
    return '23.44';
});

add_filter( 'bizberg_typography_h4_mobile', function(){
    return '21.88';
});

add_filter( 'bizberg_header_site_tagline_color', function(){
    return '#fff';
});

add_filter( 'bizberg_header_site_title_color', function(){
    return '#fff';
});

add_filter( 'bizberg_header_menu_separator', function(){
    return 'rgba(255,255,255,0)';
});

add_filter( 'bizberg_header_menu_text_color', function(){
    return '#fff';
});

add_filter( 'bizberg_header_navbar_background_1', function(){
    return '#2c2825';
});

add_filter( 'bizberg_header_navbar_background_2', function(){
    return '#2c2825';
});

add_filter( 'bizberg_theme_container_width', function(){
    return '1240';
});

/** 
* Enable Slick for this child theme
*/
add_filter( 'bizberg_slick_slider_status', function(){
    return true;
});

add_action( 'init', 'omg_blog_colors' );
function omg_blog_colors(){

    $options = array(
        'bizberg_slider_title_box_highlight_color',
        'bizberg_slider_arrow_background_color',
        'bizberg_slider_dot_active_color',
        'bizberg_read_more_background_color',
        'bizberg_theme_color', // Change the theme color
        'bizberg_header_menu_color_hover',
        'bizberg_header_button_color',
        'bizberg_header_button_color_hover',
        'bizberg_link_color',
        'bizberg_link_color_hover',
        'bizberg_sidebar_widget_title_color',
        'bizberg_blog_listing_pagination_active_hover_color',
        'bizberg_heading_color',
        'bizberg_sidebar_widget_link_color_hover',
        'bizberg_footer_social_icon_color',
        'bizberg_footer_copyright_background',
        'bizberg_header_menu_color_hover_sticky_menu'
    );

    foreach ( $options as $value ) {
        
        add_filter( $value , function(){
            return '#d85726';
        });

    }

}

add_filter( 'bizberg_site_tagline_font', function(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '500',
        'font-size'      => '12px',
        'line-height'    => '1.8',
        'letter-spacing' => '2px',
        'text-transform' => 'uppercase',
        'text-align'     => 'left'
    ];
});

add_filter( 'bizberg_site_title_font', function(){
    return [
        'font-family'    => 'Roboto Slab',
        'variant'        => '400',
        'font-size'      => '24px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left'
    ];
});

add_filter( 'bizberg_slider_banner_settings', function(){
    return 'none';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return '#3a4cb4';
});

add_filter( 'bizberg_header_btn_border_radius', function(){
    return array(
        'top-left-radius'  => '0px',
        'top-right-radius'  => '0px',
        'bottom-left-radius' => '0px',
        'bottom-right-radius' => '0px'
    );
});

add_filter( 'bizberg_header_button_border_color', function(){
    return '#cc1451';
});

add_filter( 'bizberg_header_button_border_dimensions', function(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
});

add_filter( 'bizberg_slider_btn_border_radius', function(){
    return array(
        'border-top-left-radius'  => '0px',
        'border-top-right-radius'  => '0px',
        'border-bottom-right-radius' => '0px',
        'border-bottom-left-radius' => '0px'
    );
});

add_filter( 'bizberg_read_more_border_color', function(){
    return '#cc1451';
});

add_filter( 'bizberg_read_more_border_dimensions', function(){
    return array(
        'top-width'  => '0px',
        'bottom-width'  => '5px',
        'left-width' => '0px',
        'right-width' => '0px',
    );
});

add_filter( 'bizberg_header_2_spacing', function(){
    return [
        'padding-top'  => '50px',
        'padding-bottom'  => '60px'
    ];
});

add_filter( 'bizberg_header_columns_middle_style', function(){
    return 'col-sm-2|col-sm-8|col-sm-2';
});

add_filter( 'bizberg_site_tagline_font_sticky_menu', function(){
    return 12;
});

add_action( 'bizberg_before_homepage_blog', 'omg_blog_slider' );
function omg_blog_slider(){ 

    $slider_status = bizberg_get_theme_mod( 'omg_blog_slider_status' );

    if( !$slider_status ){
        return;
    }

    $args = array(
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => bizberg_get_theme_mod( 'omg_blog_slider_limit' ),
        'cat'                 => bizberg_get_theme_mod( 'omg_blog_slider_category' ),
        'orderby'             => bizberg_get_theme_mod( 'omg_blog_slider_orderby' ),
        'ignore_sticky_posts' => bizberg_get_theme_mod( 'omg_blog_slider_sticky_posts_status' )
    ); 

    $slider_query = new WP_Query( $args );

    if( $slider_query->have_posts() ): ?>

        <section class="banner-style">

            <div class="">

                <div class="row banner-slider eye_catching_blog_slider">

                    <?php 
                    while( $slider_query->have_posts() ): $slider_query->the_post();

                        global $post;

                        $category_detail = get_the_category( $post->ID );

                        $cat_name = !empty( $category_detail[0]->name ) ? $category_detail[0]->name : '';

                        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url( $post, 'large' ) : get_template_directory_uri() . '/assets/images/placeholder.jpg'; ?>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="popular-item-wp">
                                <img src="<?php echo esc_url( $image_url ); ?>" class="ecb_slider_image">
                                <div class="pp-item-detail">

                                    <?php  
                                    if( !empty( $cat_name ) ){ ?>
                                        <div class="upper-item-dt">
                                            <a href="<?php echo esc_url( get_category_link( $category_detail[0]->term_id ) ); ?>" class="ecb_category">
                                                <?php echo esc_html( $cat_name ); ?>
                                            </a>
                                        </div>
                                        <?php 
                                    } ?>

                                    <div class="lower-item-dt">
                                        <a class="ecb_title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <div class="ecb_date">
                                            <?php echo esc_html( get_the_date() ); ?>
                                        </div>
                                    </div>
                                </div>   
                                <div class="overlay"></div>                     
                            </div>

                        </div>

                        <?php

                    endwhile;?>

                </div>

            </div>

        </section>

        <?php

    endif;

    wp_reset_postdata();
}

function omg_blog_kirki_slider_options(){

    Kirki::add_section( 'omg_blog_slider', array(
        'title'          => esc_html__( 'Slider', 'omg-blog' ),
        'section'        => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'omg_blog_slider_status',
        'label'       => esc_html__( 'Enable Slider ?', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => true,
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'omg_blog_slider_category',
        'label'       => esc_html__( 'Select Post Category', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'multiple'    => 99,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'omg_blog_slider_sticky_posts_status',
        'label'       => esc_html__( 'Exclude Sticky Posts ?', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => false,
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
            array(
                'setting'  => 'omg_blog_slider_category',
                'operator' => '==',
                'value'    => ''
            ),
        )
    ] );

    Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'omg_blog_slider_orderby',
        'label'       => esc_html__( 'Order By', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'multiple'    => 1,
        'default'     => 'date',
        'choices'     => array(
            'title' => esc_html__( 'Title', 'omg-blog' ),
            'date'  => esc_html__( 'Date', 'omg-blog' ),
            'rand'  => esc_html__( 'Rand', 'omg-blog' )
        ),
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'omg_blog_slider_limit',
        'label'       => esc_html__( 'Limit', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => 6,
        'choices'     => [
            'min'  => 1,
            'max'  => 10,
            'step' => 1,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'omg_blog_slider_image_options',
        'section'     => 'omg_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Image Options', 'omg-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_image_height',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Image Height ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_image_height',
                            'default'     => 450,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px'
                                ),
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Image Height ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_image_height',
                            'default'     => 400,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Image Height ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_image_height',
                            'default'     => 400,
                            'choices'     => [
                                'min'  => 100,
                                'max'  => 500,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.banner-style .popular-item-wp img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'omg_blog_slider_arrow_options',
        'section'     => 'omg_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Arrow Options', 'omg-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_arrow_background',
        'label'       => __( 'Background Color', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#fff',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev, .eye_catching_blog_slider .slick-next',
                'property' => 'background'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_arrow_background_hover',
        'label'       => __( 'Background Color Hover', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#d85726',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:hover, .eye_catching_blog_slider .slick-next:hover',
                'property' => 'background'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_arrow_color',
        'label'       => __( 'Arrow Color', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#333',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:before, .eye_catching_blog_slider .slick-next:before',
                'property' => 'color'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_arrow_color_hover',
        'label'       => __( 'Arrow Color Hover', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#fff',
        'transport' => 'auto',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
        'output' => array(
            array(
                'element'  => '.eye_catching_blog_slider .slick-prev:hover:before, .eye_catching_blog_slider .slick-next:hover:before',
                'property' => 'color'
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'omg_blog_slider_font_options',
        'section'     => 'omg_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Font Options', 'omg-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'omg_blog_slider_font_options_category',
        'label'       => esc_html__( 'Category Font', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => [
            'font-family'    => 'Rochester',
            'variant'        => 'regular',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#fff',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_category',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_category_font_size',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Category Font Size ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_font',
                            'default'     => 34,  
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Category Font Size ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_font',
                            'default'     => 34,  
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Category Font Size ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_font',
                            'default'     => 34, 
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_category_spacing_bottom',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_spacing_bottom',
                            'default'     => 0,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_spacing_bottom',
                            'default'     => 0,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Category Spacing Bottom ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_category_spacing_bottom',
                            'default'     => 0, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_category',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'omg_blog_slider_font_options_title',
        'label'       => esc_html__( 'Title Font', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => [
            'font-family'    => 'Roboto Slab',
            'variant'        => '500',
            'line-height'    => '1.2',
            'letter-spacing' => '0px',
            'color'          => '#fff',
            'text-transform' => 'Capitalize'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_title',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_title_font_size',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_font_size',
                            'default'     => 33,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_font_size',
                            'default'     => 14,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_font_size',
                            'default'     => 14, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_title_spacing_bottom',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_spacing_bottom',
                            'default'     => 10,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_spacing_bottom',
                            'default'     => 10,  
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing Bottom ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_title_spacing_bottom',
                            'default'     => 10, 
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 50,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'       => '.ecb_title',
                                    'property'      => 'padding-bottom',
                                    'value_pattern' => '$px',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'omg_blog_slider_font_options_date',
        'label'       => esc_html__( 'Date Font', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => [
            'font-family'    => 'Montserrat',
            'variant'        => '500',
            'font-size'      => '11px',
            'line-height'    => '1.5',
            'letter-spacing' => '1px',
            'color'          => '#fff',
            'text-transform' => 'uppercase',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.ecb_date',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'omg_blog_slider_options',
        'section'     => 'omg_blog_slider',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Other Options', 'omg-blog' ) . '</div>',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_background_1',
        'label'       => __( 'Background Color 1', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#2c2825',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'omg_blog_slider_background_2',
        'label'       => __( 'Background Color 2', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => '#2c2825',
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        )
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_outer_spacing',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_outer_spacing',
                            'default'     => [
                                'padding-top'  => '5px',
                                'padding-bottom'  => '25px',
                                'padding-left' => '0px',
                                'padding-right' => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'omg-blog' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'omg-blog' ),
                                    'padding-left' => esc_html__( 'Left', 'omg-blog' ),
                                    'padding-right' => esc_html__( 'Right', 'omg-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_outer_spacing',
                            'default'     => [
                                'padding-top'  => '0px',
                                'padding-bottom'  => '25px',
                                'padding-left' => '0px',
                                'padding-right' => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'omg-blog' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'omg-blog' ),
                                    'padding-left' => esc_html__( 'Left', 'omg-blog' ),
                                    'padding-right' => esc_html__( 'Right', 'omg-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider',
                                    'media_query'   => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_outer_spacing',
                            'default'     => [
                                'padding-top'  => '0px',
                                'padding-bottom'  => '0px',
                                'padding-left' => '0px',
                                'padding-right' => '0px'
                            ],
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'omg-blog' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'omg-blog' ),
                                    'padding-left' => esc_html__( 'Left', 'omg-blog' ),
                                    'padding-right' => esc_html__( 'Right', 'omg-blog' )
                                ],
                            ],
                            'output' => array(
                                array(
                                    'element'       => '.banner-slider.eye_catching_blog_slider',
                                    'media_query'   => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'checkbox',
        'settings'    => 'omg_blog_slider_drag',
        'label'       => esc_html__( 'Draggable ?', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => true,
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'omg_blog_slider',
                'settings' => 'omg_blog_slider_slides_to_show_option',
                'global_active_callback'    => array(
                    array(
                        'setting'  => 'omg_blog_slider_status',
                        'operator' => '==',
                        'value'    => true
                    )
                ),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Slides to Show ( Desktop )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_slidesToShow',
                            'default'     => 2,  
                            'choices'     => [
                                'min'  => 1,
                                'max'  => 6,
                                'step' => 1,
                            ]
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Slides to Show ( Tablet )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_slidesToShow_tablet',
                            'default'     => 1,  
                            'choices'     => [
                                'min'  => 1,
                                'max'  => 6,
                                'step' => 1,
                            ]
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Slides to Show ( Mobile )', 'omg-blog' ),
                            'settings' => 'omg_blog_slider_slidesToShow_mobile',
                            'default'     => 1,  
                            'choices'     => [
                                'min'  => 1,
                                'max'  => 6,
                                'step' => 1,
                            ]
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'omg_blog_slider_autoplaySpeed',
        'label'       => esc_html__( 'Auto Play Speed', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => 3,
        'choices'     => [
            'min'  => 1,
            'max'  => 10,
            'step' => 1,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'slider',
        'settings'    => 'omg_blog_slider_speed',
        'label'       => esc_html__( 'Speed', 'omg-blog' ),
        'section'     => 'omg_blog_slider',
        'default'     => 300,
        'choices'     => [
            'min'  => 300,
            'max'  => 10000,
            'step' => 100,
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'omg_blog_slider_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

}

add_action( 'init' , 'omg_blog_kirki_fields' );
function omg_blog_kirki_fields(){

    if( !class_exists( 'Kirki' ) ){
        return;
    }

    /**
    * Slider Options
    */

    omg_blog_kirki_slider_options();

}

add_filter( 'bizberg_inline_style', function( $inline_css ){

    $omg_blog_slider_background_1 = bizberg_get_theme_mod( 'omg_blog_slider_background_1' );
    $omg_blog_slider_background_2 = bizberg_get_theme_mod( 'omg_blog_slider_background_2' );

    if( function_exists( 'bizberg_theme_get_gradient_color' ) ){
        $inline_css .= bizberg_theme_get_gradient_color( $omg_blog_slider_background_1, $omg_blog_slider_background_2 , '.banner-slider.eye_catching_blog_slider' );    
    }   

    return $inline_css;

});

add_filter( 'bizberg_localize_scripts', function( $data ){

    $data['slidesToShowDesktop'] = bizberg_get_theme_mod( 'number_setting_desktop_omg_blog_slider_slidesToShow' );
    $data['slidesToShowTablet'] = bizberg_get_theme_mod( 'number_setting_tablet_omg_blog_slider_slidesToShow_tablet' );
    $data['slidesToShowMobile'] = bizberg_get_theme_mod( 'number_setting_mobile_omg_blog_slider_slidesToShow_mobile' );

    $data['autoplaySpeed'] = bizberg_get_theme_mod( 'omg_blog_slider_autoplaySpeed' );
    $data['speed'] = bizberg_get_theme_mod( 'omg_blog_slider_speed' );
    $data['draggable'] = bizberg_get_theme_mod( 'omg_blog_slider_drag' );

    return $data;

});

add_filter( 'bizberg_sidebar_widget_heading_font_size_status', 'omg_blog_sidebar_widget_heading_font_size_status' );
function omg_blog_sidebar_widget_heading_font_size_status(){
    return true;
}
 
add_filter( 'bizberg_number_setting_desktop_sidebar_widget_heading_font_sizes', 'omg_blog_number_setting_desktop_sidebar_widget_heading_font_sizes' );
function omg_blog_number_setting_desktop_sidebar_widget_heading_font_sizes(){
    return 25;
}
 
add_filter( 'bizberg_number_setting_tablet_sidebar_widget_heading_font_sizes', 'omg_blog_number_setting_tablet_sidebar_widget_heading_font_sizes' );
function omg_blog_number_setting_tablet_sidebar_widget_heading_font_sizes(){
    return 23.44;
}
 
add_filter( 'bizberg_number_setting_mobile_sidebar_widget_heading_font_sizes', 'omg_blog_number_setting_mobile_sidebar_widget_heading_font_sizes' );
function omg_blog_number_setting_mobile_sidebar_widget_heading_font_sizes(){
    return 21.88;
}

add_filter( 'bizberg_sticky_content_sidebar' , 'omg_blog_sticky_content_sidebar' );
function omg_blog_sticky_content_sidebar(){
    return false;
}