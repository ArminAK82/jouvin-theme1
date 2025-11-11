<?php
function jouvin_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'jouvin_options', array(
        'title'    => __( 'Jouvin Options', 'jouvin' ),
        'priority' => 10,
    ) );

    // Move sections to the panel
    $wp_customize->get_section( 'colors' )->panel = 'jouvin_options';
    $wp_customize->get_section( 'background_image' )->panel = 'jouvin_options';

    // Layout Section
    $wp_customize->add_section( 'layout_section', array(
        'title'    => __( 'Layout', 'jouvin' ),
        'panel'    => 'jouvin_options',
    ) );

    $wp_customize->add_setting( 'container_width', array(
        'default'   => '1200',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'container_width', array(
        'label'    => __( 'Container Width (px)', 'jouvin' ),
        'section'  => 'layout_section',
        'type'     => 'number',
    ) );

    // Typography Section
    $wp_customize->add_section( 'typography_section', array(
        'title'    => __( 'Typography', 'jouvin' ),
        'panel'    => 'jouvin_options',
    ) );

    $wp_customize->add_setting( 'primary_font', array(
        'default'   => 'Poppins',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'primary_font', array(
        'label'    => __( 'Primary Font', 'jouvin' ),
        'section'  => 'typography_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'heading_font', array(
        'default'   => 'Poppins',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'heading_font', array(
        'label'    => __( 'Heading Font', 'jouvin' ),
        'section'  => 'typography_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'body_font_size', array(
        'default'   => '16',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'body_font_size', array(
        'label'    => __( 'Body Font Size (px)', 'jouvin' ),
        'section'  => 'typography_section',
        'type'     => 'number',
    ) );

    $wp_customize->add_setting( 'heading_font_size', array(
        'default'   => '32',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'heading_font_size', array(
        'label'    => __( 'Heading Font Size (px)', 'jouvin' ),
        'section'  => 'typography_section',
        'type'     => 'number',
    ) );

    $wp_customize->add_setting( 'heading_font_weight', array(
        'default'   => '600',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( 'heading_font_weight', array(
        'label'    => __( 'Heading Font Weight', 'jouvin' ),
        'section'  => 'typography_section',
        'type'     => 'number',
        'input_attrs' => array(
            'min' => 100,
            'max' => 900,
            'step' => 100,
        ),
    ) );

    // Color Settings
    $wp_customize->add_setting( 'accent_color', array(
        'default'   => '#6a0dad',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'    => __( 'Accent Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'secondary_color', array(
        'default'   => '#007bff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'tertiary_color', array(
        'default'   => '#8a2be2',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tertiary_color', array(
        'label'    => __( 'Tertiary Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'text_color', array(
        'default'   => '#333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
        'label'    => __( 'Text Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'header_background_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'label'    => __( 'Header Background Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'footer_background_color', array(
        'default'   => '#f9f9f9',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'label'    => __( 'Footer Background Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'button_color', array(
        'default'   => '#6a0dad',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label'    => __( 'Button Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'button_hover_color', array(
        'default'   => '#8a2be2',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover_color', array(
        'label'    => __( 'Button Hover Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'link_color', array(
        'default'   => '#007bff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'    => __( 'Link Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'link_hover_color', array(
        'default'   => '#6a0dad',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
        'label'    => __( 'Link Hover Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );

    $wp_customize->add_setting( 'heading_color', array(
        'default'   => '#6a0dad',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color', array(
        'label'    => __( 'Heading Color', 'jouvin' ),
        'section'  => 'colors',
    ) ) );
}
add_action( 'customize_register', 'jouvin_customize_register' );

function jouvin_get_customizer_css() {
    ob_start();
    ?>
    :root {
        --color-primary: <?php echo get_theme_mod( 'accent_color', '#6a0dad' ); ?>;
        --color-secondary: <?php echo get_theme_mod( 'secondary_color', '#007bff' ); ?>;
        --color-accent: <?php echo get_theme_mod( 'tertiary_color', '#8a2be2' ); ?>;
        --color-text: <?php echo get_theme_mod( 'text_color', '#333' ); ?>;
        --color-background: <?php echo get_theme_mod( 'background_color', '#fff' ); ?>;
        --font-primary: '<?php echo get_theme_mod( 'primary_font', 'Poppins' ); ?>', sans-serif;
        --font-heading: '<?php echo get_theme_mod( 'heading_font', 'Poppins' ); ?>', sans-serif;
    }

    .container {
        max-width: <?php echo get_theme_mod( 'container_width', '1200' ); ?>px;
    }

    body {
        font-size: <?php echo get_theme_mod( 'body_font_size', '16' ); ?>px;
        font-family: var(--font-primary);
        color: var(--color-text);
        background-color: var(--color-background);
    }

    h1, h2, h3, h4, h5, h6 {
        font-size: <?php echo get_theme_mod( 'heading_font_size', '32' ); ?>px;
        font-weight: <?php echo get_theme_mod( 'heading_font_weight', '600' ); ?>;
    }

    .site-header {
        background-color: <?php echo get_theme_mod( 'header_background_color', '#fff' ); ?>;
    }

    .site-footer {
        background-color: <?php echo get_theme_mod( 'footer_background_color', '#f9f9f9' ); ?>;
    }

    .button,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button {
        background-color: <?php echo get_theme_mod( 'button_color', '#6a0dad' ); ?>;
    }

    .button:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce input.button:hover {
        background-color: <?php echo get_theme_mod( 'button_hover_color', '#8a2be2' ); ?>;
    }

    a {
        color: <?php echo get_theme_mod( 'link_color', '#007bff' ); ?>;
    }

    a:hover {
        color: <?php echo get_theme_mod( 'link_hover_color', '#6a0dad' ); ?>;
    }

    h1, h2, h3, h4, h5, h6 {
        color: <?php echo get_theme_mod( 'heading_color', '#6a0dad' ); ?>;
        font-family: var(--font-heading);
    }
    <?php
    return ob_get_clean();
}

function jouvin_customizer_css_output() {
    $custom_css = jouvin_get_customizer_css();
    if ( ! empty( $custom_css ) ) {
        echo '<style type="text/css">' . $custom_css . '</style>';
    }
}
add_action( 'wp_head', 'jouvin_customizer_css_output' );
