<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5a4ce43df2db2',
    'title' => __('Region images', 'location-explorer'),
    'fields' => array(
        0 => array(
            'key' => 'field_5a4ce482417a0',
            'label' => __('Mood setting region images', 'location-explorer'),
            'name' => 'location_region_images',
            'type' => 'gallery',
            'instructions' => __('Add some nice images from the region that are inspirational.', 'location-explorer'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => '',
            'max' => '',
            'insert' => 'append',
            'library' => 'all',
            'min_width' => 640,
            'min_height' => 360,
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'jpg,jpeg',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'area',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}