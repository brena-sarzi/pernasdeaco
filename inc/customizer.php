<?php

function wpsite_customizer( $wp_customize ){
    
    //Map
    $wp_customize->add_section(
        'sec_map', array(
            'title' => 'Mapa',
            'description' => 'Map Section'
        )
    );

    //API Key
    $wp_customize->add_setting(
        'set_map_apikey', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'set_map_apikey', array(
            'label' => 'API Key',
            'description' => 'Insira sua API Key',
            'section' => 'sec_map',
            'type' => 'text'
        )
    );

    //Address

    $wp_customize->add_setting(
        'set_map_address', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_textarea'
        )
    );

    $wp_customize->add_control(
        'set_map_address', array(
            'label' => 'Escreva seu endereço aqui',
            'description' => 'Não use caracteres especiais',
            'section' => 'sec_map',
            'type' => 'textarea'
        )
    );

}
add_action( 'customize_register', 'wpsite_customizer' );