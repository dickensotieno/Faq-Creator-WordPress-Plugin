<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

/**
 * Framework page settings
 */
$settings = array(
    'header_title' => __('Accordion Faq', 'faq-creator'),
    'menu_title'   => __('Accordion Faq', 'faq-creator'),
    'menu_type'    => 'add_submenu_page',
    'menu_slug'    => 'faq-creator',
    'ajax_save'    => false,
);


/**
 * sections and fields option
 * @var array
 */
$options        = array();

/*
 *  Styling options tab and fields settings
 */
$options[]      = array (
    'name'        => 'general',
    'title'       => __('General', 'faq-creator'),
    'icon'        => 'fa fa-cogs',
    'fields'      => array(
        array(
            'title'     => __('Drag & Drop Reorder', 'faq-creator'),
            'id'        => 'reorder',
            'type'      => 'switcher',
            'default' => true
        ),
        array(
            'id'        => 'icon_closed',
            'type'      => 'icon',
            'title'     => __('Closed Icon', 'faq-creator'),
            'default'   => 'si-plus3'
        ),
        array(
            'id'        => 'icon_opened',
            'type'      => 'icon',
            'title'     => __('Opened Icon', 'faq-creator'),
            'default'   => 'si-minus3'
        ),
        array(
            'id'      => 'font_size_h2',
            'type'    => 'number',
            'title'   => 'Category Title Font Size',
            'after'   => ' <i class="sk-text-muted">px</i>',
            'default' => 26,
        ),
        array(
            'id'      => 'font_size_h3',
            'type'    => 'number',
            'title'   => 'Faq Title Font Size',
            'after'   => ' <i class="sk-text-muted">px</i>',
            'default' => 20,
        ),
        array(
            'id'        => 'custom_css',
            'type'      => 'textarea',
            'title'     => __('Custom CSS', 'faq-creator'),
        ),
    ),
);

SkeletFramework::instance( $settings, $options );
