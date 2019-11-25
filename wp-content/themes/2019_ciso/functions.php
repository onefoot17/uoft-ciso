<?php
    add_action( 'after_setup_theme', 'ciso_2019_setup' );
    function ciso_2019_setup() {
        load_theme_textdomain( 'ciso_2019', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form' ) );

        global $content_width;

        if ( ! isset( $content_width ) ) {
            $content_width = 1920;
        }
    }

    // Menus
    if ( function_exists ( 'register_nav_menus' ) ) {
        register_nav_menus (
            array (
                'social-links' => esc_html__( 'Social Links', 'ciso_2019' ),
                'footer' => esc_html__( 'Footer', 'ciso_2019' ),
                'primary' => __( 'Primary Menu', 'ciso_2019' ),
                'utility' => __( 'Toolbar Menu', 'ciso_2019' ),
                'footer' => __( 'Footer Menu', 'ciso_2019' )
            )
        );
    }

    // Enqueue Scripts
    add_action( 'wp_enqueue_scripts', 'ciso_2019_load_scripts' );
    function ciso_2019_load_scripts() {
        // CSS
        wp_enqueue_style( 'ciso_2019-style', get_template_directory_uri() . '/build/css/styles.css' );
    }

    // Remove auto tags on Index page    
    function removeP(){
        if ( is_front_page() ) {
            remove_filter ('the_excerpt', 'wpautop');
            
            remove_filter('the_content', 'wpautop');
        }
    }
    
    add_action( 'template_redirect', 'removeP' );
    
    // SVG Upload
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;

        if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }

        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
    
    function uoft_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Contact Information', 'ciso_2019' ),
            'id'            => 'sidebar-contact',
            'before_widget' => '<section id="%1$s" class="section__widget section--contact__widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="section__heading section__post__title section--highlights__post__title section--contact__title">',
            'after_title'   => '</h2>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer', 'ciso_2019' ),
            'id'            => 'sidebar-footer',
            'before_widget' => '<section id="%1$s" class="section--footer__widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="section--footer__title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'uoft_widgets_init' );
?>
