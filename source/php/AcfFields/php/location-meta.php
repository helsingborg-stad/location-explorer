<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5a4ceae3ea641',
    'title' => __('Area quick facts', 'location-explorer'),
    'fields' => array(
        0 => array(
            'key' => 'field_5a4ceaed87a1a',
            'label' => __('General facts', 'location-explorer'),
            'name' => 'area_general_facts',
            'type' => 'textarea',
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
            'maxlength' => '',
            'rows' => 6,
            'new_lines' => '',
        ),
        1 => array(
            'key' => 'field_5a4ceb0387a1b',
            'label' => __('Area metadata', 'location-explorer'),
            'name' => 'area_metadata',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => '',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_5a4ceb2587a1c',
                    'label' => __('Heading', 'location-explorer'),
                    'name' => 'area_heading',
                    'type' => 'checkbox',
                    'instructions' => __('Add a heading for this metafield', 'location-explorer'),
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'population' => __('Population', 'location-explorer'),
                        'preschool' => __('Preschool', 'location-explorer'),
                        'elementaryschool' => __('Elementary school', 'location-explorer'),
                        'education' => __('Education', 'location-explorer'),
                        'distances' => __('Distances', 'location-explorer'),
                    ),
                    'allow_custom' => 1,
                    'save_custom' => 0,
                    'default_value' => array(
                    ),
                    'layout' => 'horizontal',
                    'toggle' => 0,
                    'return_format' => 'array',
                ),
                1 => array(
                    'key' => 'field_5a4cebf787a1d',
                    'label' => __('Information', 'location-explorer'),
                    'name' => 'area_information',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 4,
                    'new_lines' => '',
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