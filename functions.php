<?php

add_action('init', 'create_taxonomy_object');
    function create_taxonomy_object(){
        register_taxonomy('cat_object', array('object'), array(
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => array(
                'name' => _x( 'Тип недвижемости', 'taxonomy general name' ),
                'singular_name' => _x( 'Тип недвижемости', 'taxonomy singular name' ),
                'search_items' =>  __( 'Искать типы недвижемости' ),
                'all_items' => __( 'Все типы недвижемости' ),
                'parent_item' => __( 'Родительский тип недвижемости' ),
                'parent_item_colon' => __( 'Родительский тип недвижемости:' ),
                'edit_item' => __( 'Редактировать тип недвижемости' ),
                'update_item' => __( 'Обновить тип недвижемости' ),
                'add_new_item' => __( 'Добавить тип недвижемости' ),
                'new_item_name' => __( 'Новый тип недвижемости' ),
                'menu_name' => __( 'Типы недвижемости' ),
            ),
            'description'           => '',
            'public'                => true,
            'publicly_queryable'    => null,
            'show_in_nav_menus'     => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_tagcloud'         => true,
            'show_in_rest'          => null,
            'rest_base'             => null,
            'hierarchical'          => true,
            'update_count_callback' => '',
            'rewrite'               => true,
            //'query_var'             => $taxonomy,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => false,
            '_builtin'              => false,
            'show_in_quick_edit'    => null,
        ) );
    }
    add_action('init', 'register_post_types_object');
    function register_post_types_object(){
        register_post_type('object', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'Недвижемость',
                'singular_name'      => 'Недвижемость',
                'add_new'            => 'Добавить недвижемость',
                'add_new_item'       => 'Добавление недвижемости',
                'edit_item'          => 'Редактирование недвижемости',
                'new_item'           => 'Новая недвижемость',
                'view_item'          => 'Смотреть недвижемость',
                'search_items'       => 'Искать недвижемость',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'parent_item_colon'  => '',
                'menu_name'          => 'Недвижемость',
            ),
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => null,
            'exclude_from_search' => null,
            'show_ui'             => null,
            'show_in_menu'        => null,
            'show_in_admin_bar'   => null,
            'show_in_nav_menus'   => null,
            'show_in_rest'        => null,
            'rest_base'           => null,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-admin-multisite', 
            //'capability_type'   => 'post',
            //'capabilities'      => 'post',
            //'map_meta_cap'      => null,
            'hierarchical'        => false,
            'supports'            => array('title','editor','thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => array('cat_sistem'),
            'has_archive'         => false,
            'rewrite'             => true,
            'query_var'           => true,
        ) );
    }