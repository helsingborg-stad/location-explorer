<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5a4ce9b2a982c',
    'title' => __('External links', 'location-explorer'),
    'fields' => array(
        0 => array(
            'key' => 'field_5a4ce9bbfd55a',
            'label' => __('Links to some external resources', 'location-explorer'),
            'name' => 'area_external',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_5a4ce9e9fd55b',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Add new link', 'location-explorer'),
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5a4ce9e9fd55b',
                    'label' => __('Link label', 'location-explorer'),
                    'name' => 'link_label',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                1 => array(
                    'key' => 'field_5a4cea00fd55c',
                    'label' => __('Link url', 'location-explorer'),
                    'name' => 'link_url',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                ),
            ),
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