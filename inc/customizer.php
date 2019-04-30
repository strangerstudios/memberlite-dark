<?php
/**
 * Memberlite Dark theme customizer options
 */
function memberlite_dark_childtheme_customize_register( $wp_customize ) {

$wp_customize->add_section( 
    'memberlite_dark_childtheme_options', 
    array(
        'title'       => __( 'Memberlite Dark Options', 'memberlite-dark' ),
        'priority'    => 36,
        'capability'  => 'edit_theme_options',
        'description' => __( 'Allows you to customize settings for the Memberlite Dark child theme.', 'memberlite-dark' ),
    )
);

/** Background Textures */

$wp_customize->add_setting(
    'memberlite_dark_background_texture',
    array(
        'default'              => 'none',
        'transport'            => 'refresh',
    )
);

$wp_customize->add_control(
    'memberlite_dark_background_texture',
    array(
        'label'    => __( 'Background Texture', 'memberlite' ),
        'section'  => 'memberlite_dark_childtheme_options',
        'type'     => 'select',
        'choices'  => array(
            'none'                         => __( 'None', 'memberlite' ),
            'texture-1.png'                => __( 'Default', 'memberlite' ),
            'texture-2.png'                => __( '3Px Tile', 'memberlite' ),
            'texture-3.png'                => __( 'Arabesque', 'memberlite' ),
            'texture-4.png'                => __( 'Asfalt (dark)', 'memberlite' ),
            'texture-5.png'                => __( 'Asfalt (light)', 'memberlite' ),
            'basketball.png'               => __( 'Basketball', 'memberlite' ),
            'texture-6.png'                => __( 'Carbon Fibre (small)', 'memberlite' ),
            'texture-7.png'                => __( 'Carbon Fibre (large)', 'memberlite' ),
            'cartographer.png'             => __( 'Cartographer', 'memberlite' ),
            'texture-8.png'                => __( 'Concrete Wall', 'memberlite' ),
            'texture-9.png'                => __( 'Concrete Wall 2', 'memberlite' ),
            'texture-10.png'               => __( 'Dark Wood', 'memberlite' ),
            'green-dust-and-scratches.png' => __( 'Dust and Scratches', 'memberlite' ),
            'food.png'                     => __( 'Food', 'memberlite' ),
            'foggy-birds.png'              => __( 'Foggy Birds', 'memberlite' ),
            'hexellence.png'               => __( 'Hexellence', 'memberlite' ),
            'inspiration-geometry.png'     => __( 'Inspiration Geometry', 'memberlite' ),
            'lined-paper.png'              => __( 'Lined Paper', 'memberlite' ),
            'mirrored-squares.png'         => __( 'Mirrored Squares', 'memberlite' ),
            'notebook-dark.png'            => __( 'Notebook', 'memberlite' ),
            'polonez-pattern.png'          => __( 'Polonez Pattern', 'memberlite' ),
            'random-grey-variations.png'   => __( 'Random Grey Variations', 'memberlite' ),
            'shley-tree-1.png'             => __( 'Shley Tree 1', 'memberlite' ),
            'shley-tree-2.png'             => __( 'Shley Tree 2', 'memberlite' ),
            'skulls.png'                   => __( 'Skulls', 'memberlite' ),
            'snow.png'                     => __( 'Snow', 'memberlite' ),
            'stardust.png'                 => __( 'Stardust', 'memberlite' ),
            'subtle-zebra-3d.png'          => __( 'Subtle Zebra 3D', 'memberlite' ),
            'tasky.png'                    => __( 'Tasky', 'memberlite' ),
            'tree-bark.png'                => __( 'Tree Bark', 'memberlite' ),
            'vichy.png'                    => __( 'Vichy', 'memberlite' ),
            'vintage-speckles.png'         => __( 'Vintage Speckles', 'memberlite' ),
            'wavecut.png'                  => __( 'Wavecut', 'memberlite' ),
            'white-diamond.png'            => __( 'White Diamond', 'memberlite' ),
            'white-wall-3-2.png'           => __( 'White Wall', 'memberlite' ),
            'xv.png'                       => __( 'Xv', 'memberlite' ),
            'zig-zag.png'                  => __( 'Zig Zag', 'memberlite' ),
        ),
        'priority' => 5,
    )
);

/** Texture Parallax Effect */
$wp_customize->add_setting(
    'memberlite_dark_texture_parallax', array(
        'default'   => false,
        'transport' => 'refresh',
    )
);  

$wp_customize->add_control(
    'memberlite_dark_texture_parallax', array(
        'label'    => __( 'Add parallax effect to textures', 'memberlite-dark' ),
        'section'  => 'memberlite_dark_childtheme_options',
        'settings' => 'memberlite_dark_texture_parallax',
        'type'     => 'checkbox',
        'priority' => 6
    )
);

}
add_action( 'customize_register', 'memberlite_dark_childtheme_customize_register');
