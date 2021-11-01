<?php

/* Slider Home ***********************************/
add_action('init', 'type_post_slideHome');
function type_post_slideHome() { 
    $labels = array(
        'name' => _x('Slider Home', 'post type general name'),
        'singular_name' => _x('Imagem', 'post type singular name'),
        'add_new' => _x('Adicionar Imagem', 'Nova Imagem'),
        'add_new_item' => __('Nova Imagem'),
        'edit_item' => __('Editar Imagem'),
        'new_item' => __('Nova Imagem'),
        'view_item' => __('Ver Imagem'),
        'search_items' => __('Procurar Imagem'),
        'not_found' =>  __('Nenhuma imagem encontrada'),
        'not_found_in_trash' => __('Nenhuma imagem encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Slider Home'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 7,	
        'menu_icon' => 'dashicons-format-image',
        'supports' => array('title','thumbnail')
      );

    register_post_type( 'slideHome' , $args );
    flush_rewrite_rules();
}

/* Convênios***********************************/
add_action('init', 'type_post_convenios');
function type_post_convenios() { 
    $labels = array(
        'name' => _x('Convênios', 'post type general name'),
        'singular_name' => _x('Convênio', 'post type singular name'),
        'add_new' => _x('Adicionar Convênio', 'Novo Convênio'),
        'add_new_item' => __('Novo Convênio'),
        'edit_item' => __('Editar Convênio'),
        'new_item' => __('Novo Convênio'),
        'view_item' => __('Ver Convênio'),
        'search_items' => __('Procurar Convênios'),
        'not_found' =>  __('Nenhum convênio encontrado'),
        'not_found_in_trash' => __('Nenhum convênio encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Convênios'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 7,	
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array('title')
      );

    register_post_type( 'convenios' , $args );
    flush_rewrite_rules();
}


/* SERVIÇOS ***********************************/

add_action('init', 'type_post_servicos');
function type_post_servicos() { 
    $labels = array(
        'name' => _x('Serviços', 'post type general name'),
        'singular_name' => _x('Serviço', 'post type singular name'),
        'add_new' => _x('Adicionar Serviço', 'Novo Serviço'),
        'add_new_item' => __('Novo Serviço'),
        'edit_item' => __('Editar Serviço'),
        'new_item' => __('Novo Serviço'),
        'view_item' => __('Ver Serviço'),
        'search_items' => __('Procurar Serviços'),
        'not_found' =>  __('Nenhum serviço encontrado'),
        'not_found_in_trash' => __('Nenhum serviço encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Serviços'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 7,	
        'menu_icon' => 'dashicons-text',
        'supports' => array('title')
      );

    register_post_type( 'servicos' , $args );
    flush_rewrite_rules();
}


?>