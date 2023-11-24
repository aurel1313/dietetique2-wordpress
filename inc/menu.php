<?php

    // enregistrer emplacement menu//
register_nav_menu('header','Entete du menu');
add_filter('nav_menu_css_class',function($classes){
    $classes[] = 'item';
    return $classes;
});
function ajouter_classe_ul_navbar($ulclass) {
    return preg_replace('/<ul>/', '<ul class="menu menu-horizontal px-1 ">', $ulclass, 1);
}
add_filter('wp_nav_menu', 'ajouter_classe_ul_navbar');

?>