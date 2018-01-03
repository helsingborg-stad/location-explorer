<?php

namespace WpListings\Entity;

class Taxonomy
{
    public $namePlural;
    public $nameSingular;
    public $slug;
    public $args;
    public $postTypes;

    public function __construct($namePlural, $nameSingular, $slug, $postTypes, $args)
    {
        $this->namePlural = $namePlural;
        $this->nameSingular = $nameSingular;
        $this->slug = $slug;
        $this->args = $args;
        $this->postTypes = $postTypes;

        add_action('init', array($this, 'registerTaxonomy'));
    }

    public function registerTaxonomy() : string
    {
        $labels = array(
            'name'              => $this->namePlural,
            'singular_name'     => $this->nameSingular,
            'search_items'      => sprintf(__('Search %s', 'location-explorer'), $this->namePlural),
            'all_items'         => sprintf(__('All %s', 'location-explorer'), $this->namePlural),
            'parent_item'       => sprintf(__('Parent %s:', 'location-explorer'), $this->nameSingular),
            'parent_item_colon' => sprintf(__('Parent %s:', 'location-explorer'), $this->nameSingular) . ':',
            'edit_item'         => sprintf(__('Edit %s', 'location-explorer'), $this->nameSingular),
            'update_item'       => sprintf(__('Update %s', 'location-explorer'), $this->nameSingular),
            'add_new_item'      => sprintf(__('Add New %s', 'location-explorer'), $this->nameSingular),
            'new_item_name'     => sprintf(__('New %s Name', 'location-explorer'), $this->nameSingular),
            'menu_name'         => $this->nameSingular,
        );

        $this->args['labels'] = $labels;

        register_taxonomy($this->slug, $this->postTypes, $this->args);
        return $this->slug;
    }
}
