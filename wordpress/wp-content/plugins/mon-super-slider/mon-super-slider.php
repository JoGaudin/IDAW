<?php

/**
 * Plugin Name:       mon-super-plugin
 * Description:       Un plugin qui permet de faire un slider
 * Version:          0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Johan Gaudin
 */

add_action('init', 'monsuperslider_init');

// Init le slider
function monsuperslider_init(){
    
    $labels = array(
        'name' => 'Slide',
        'singular_name' => 'Slides',
        'add_new' => 'Ajouter un Slide',
        'add_new_item' => 'Ajouter un nouveau Slide',
        'edit_item' => 'Editer un Slide',
        'new_item' => 'Nouvelle Slide',
        'view_item' => 'Voir 1\'Slide',
        'search_items' => 'Rechercher un Slide',
        'not_found' => 'Aucun Slide' ,
        'not_found_in_trash' => 'Aucun Slide dans la corbeille',
        'parent_item_colon' => '',
        'menu_name ' => 'Slides'
    );
        
    register_post_type('slide', array(
        'public' => true,
        'label' => $labels,
        'menu_position' => 6,
        'capability_type' => 'post',
        'supports' => array('title', 'thumbnail')
        ));
}

// affiche le slider
function monsuperslider_show(){
    echo "ici";
 }

 ?>

 