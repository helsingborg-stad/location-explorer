<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5a4ce57435598',
    'title' => __('Location (Adress)', 'location-explorer'),
    'fields' => array(
        0 => array(
            'key' => 'field_5a4ce57b0daf2',
            'label' => __('Geographical location', 'location-explorer'),
            'name' => 'area_geographical_location',
            'type' => 'google_map',
            'instructions' => __('Enter an adress for the center of this area', 'location-explorer'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'center_lat' => '56.035064',
            'center_lng' => '12.6612783',
            'zoom' => 12,
            'height' => '',
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