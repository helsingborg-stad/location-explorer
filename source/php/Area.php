<?php

namespace LocationExplorer;

class Area extends \LocationExplorer\Entity\PostType
{
    public static $postTypeSlug;
    public static $taxonomySlugs = array();
    public static $placesTaxonomySlug;

    public function __construct()
    {
        self::$taxonomySlugs[$this->transport()]        = __("Transportation", 'location-explorer');
        self::$taxonomySlugs[$this->nature()]           = __("Nature", 'location-explorer');
        self::$taxonomySlugs[$this->community()]        = __("Community", 'location-explorer');
        self::$taxonomySlugs[$this->facility()]         = __("Facilities", 'location-explorer');

        self::$postTypeSlug = $this->postType();
    }

    /**
     * Create post type
     * @return void
     */
    public function postType() : string
    {
        // Create posttype
        $postType = new \LocationExplorer\Entity\PostType(
            _x('Areas', 'Post type plural', 'location-explorer'),
            _x('Area', 'Post type singular', 'location-explorer'),
            'area',
            array(
                'description'          =>   __('Describe different areas and make them searchable.', 'location-explorer'),
                'menu_icon'            =>   'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48cGF0aCBkPSJNMjU2IDBDMTUzLjc1NSAwIDcwLjU3MyA4My4xODIgNzAuNTczIDE4NS40MjZjMCAxMjYuODg4IDE2NS45MzkgMzEzLjE2NyAxNzMuMDA0IDMyMS4wMzUgNi42MzYgNy4zOTEgMTguMjIyIDcuMzc4IDI0Ljg0NiAwIDcuMDY1LTcuODY4IDE3My4wMDQtMTk0LjE0NyAxNzMuMDA0LTMyMS4wMzVDNDQxLjQyNSA4My4xODIgMzU4LjI0NCAwIDI1NiAwem0wIDI3OC43MTljLTUxLjQ0MiAwLTkzLjI5Mi00MS44NTEtOTMuMjkyLTkzLjI5M1MyMDQuNTU5IDkyLjEzNCAyNTYgOTIuMTM0czkzLjI5MSA0MS44NTEgOTMuMjkxIDkzLjI5My00MS44NSA5My4yOTItOTMuMjkxIDkzLjI5MnoiIGZpbGw9IiNGRkYiLz48L3N2Zz4=',
                'public'               =>   true,
                'publicly_queriable'   =>   true,
                'show_ui'              =>   true,
                'show_in_nav_menus'    =>   true,
                'has_archive'          =>   true,
                'rewrite'              =>   array(
                    'slug'       =>   __('area', 'location-explorer'),
                    'with_front' =>   false
                ),
                'hierarchical'          =>  false,
                'exclude_from_search'   =>  false,
                'taxonomies'            =>  array(),
                'supports'              =>  array('title', 'revisions', 'editor', 'thumbnail')
            )
        );

        // Add taxonomies to listing
        if (!empty(self::$taxonomySlugs) && is_array(self::$taxonomySlugs)) {
            foreach (self::$taxonomySlugs as $slug => $label) {

                $postType->addTableColumn(
                    $slug,
                    $label,
                    true,
                    function ($column, $postId) {
                        $i = 0;
                        $taxonomyData = get_the_terms($postId, $column);
                        foreach ((array)$taxonomyData as $taxonomyItem) {
                            if ($i > 0) {
                                echo ', ';
                            }
                            echo isset($taxonomyItem->name) ? $taxonomyItem->name : '';
                            $i++;
                        }
                    }
                );
            }
        }

        return $postType->slug;
    }

    /**
     * Create transport taxonomy
     * @return void
     */
    public function transport() : string
    {
        $categories = new \LocationExplorer\Entity\Taxonomy(
            __('Infrastructure', 'location-explorer'),
            __('Infrastructures', 'location-explorer'),
            'infrastructure',
            array('area'),
            array(
                'hierarchical' => false
            )
        );

        return $categories->slug;
    }

    /**
     * Create nature taxonomy
     * @return void
     */
    public function nature() : string
    {
        $categories = new \LocationExplorer\Entity\Taxonomy(
            __('Nature type', 'location-explorer'),
            __('Nature types', 'location-explorer'),
            'nature',
            array('area'),
            array(
                'hierarchical' => false
            )
        );

        return $categories->slug;
    }

    /**
     * Create community taxonomy
     * @return void
     */
    public function community() : string
    {
        $categories = new \LocationExplorer\Entity\Taxonomy(
            __('Community size', 'location-explorer'),
            __('Community sizes', 'location-explorer'),
            'community',
            array('area'),
            array(
                'hierarchical' => false
            )
        );

        return $categories->slug;
    }

    /**
     * Create facility taxonomy
     * @return void
     */
    public function facility() : string
    {
        $categories = new \LocationExplorer\Entity\Taxonomy(
            __('Facility', 'location-explorer'),
            __('Facilities', 'location-explorer'),
            'facility',
            array('area'),
            array(
                'hierarchical' => false
            )
        );

        return $categories->slug;
    }
}
