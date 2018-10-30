<?php

class Et_cpt
{
  public function __construct()
  {
    add_action('init', [$this, 'create_cpt']);
    add_action('init', [$this, 'create_taxonomies']);
  }

  public function create_cpt()
  {
    $labels = [
      'name'                  => 'Projets',
      'singular_name'         => 'Projets',
      'menu_name'             => 'Projets Agence',
      'name_admin_bar'        => 'Projets',
      'archives'              => 'Archives des Projets',
      'attributes'            => 'Attributs des Projets',
      'parent_item_colon'     => 'Element parent',
      'all_items'             => 'Tout les Projets',
      'add_new_item'          => 'Ajouter un nouveau Projet',
      'add_new'               => 'Ajouter un nouveau Projet',
      'new_item'              => 'Nouveau Projet',
      'edit_item'             => 'Editer le Projet',
      'update_item'           => 'Mettre à jour le Projet',
      'view_item'             => 'Voir le Projet',
      'view_items'            => 'Voir le Projet',
      'search_items'          => 'Rechercher les Projets',
      'not_found'             => 'Aucun Projet trouvée',
      'not_found_in_trash'    => 'Aucun Projet trouvée dans la corbeille',
      'featured_image'        => 'Image du Projet',
      'set_featured_image'    => 'Ajouter une image au Projet',
      'remove_featured_image' => 'Supprimer l\'image du Projet',
      'use_featured_image'    => 'Utiliser une image pour le Projet',
      'insert_into_item'      => 'Inserer dans le Projet',
      'uploaded_to_this_item' => 'Televerser dans le Projet',
      'items_list'            => 'Liste des Projets',
      'items_list_navigation' => 'Liste des Projets',
      'filter_items_list'     => 'Filtrer la liste des Projets',
    ];

    $args = [
      'label'                 => 'projet',
      'description'           => 'Description des Projets',
      'labels'                => $labels,
      'supports'              => [
        'title',
        'editor',
        'thumbnail',
        // 'custom-fields',
        // 'excerpt'
      ],
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'taxonomies'            => [
        'category'],
      'menu_icon'             => 'dashicons-images-alt2'
    ];
    register_post_type( 'projet', $args );
  }

  public function create_taxonomies()
  {
    $labels = [
      'name'                       => 'Ingrédients',
      'singular_name'              => 'Ingrédient',
      'menu_name'                  => 'Ingrédients',
      'all_items'                  => 'Tous les ingrédients',
      'new_item_name'              => 'Nouvel ingrédient',
      'add_new_item'               => 'Ajouter un ingrédient',
      'update_item'                => 'Mettre à jour un ingrédient',
      'edit_item'                  => 'Editer un ingrédient',
      'view_item'                  => 'Voir tous les ingrédients',
      'separate_items_with_commas' => 'Séparer les ingrédient avec une virgule',
      'add_or_remove_items'        => 'Ajouter une supprimer un ingrédient',
      'choose_from_most_used'      => 'Choisir parmis les ingrédients les plus utilisés',
      'popular_items'              => 'Ingrédients populaires',
      'search_items'               => 'Rechercher un ingrédient',
      'not_found'                  => 'Aucun ingrédient trouvé',
      'items_list'                 => 'Lister les ingrédients',
      'items_list_navigation'      => 'Lister les ingrédients',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    ];
    register_taxonomy( 'ingredient', 'projet', $args );

    $labels = [
      'name'                       => 'Types',
      'singular_name'              => 'Type',
      'menu_name'                  => 'Types',
      'all_items'                  => 'Tous les types',
      'new_item_name'              => 'Nouveau type',
      'add_new_item'               => 'Ajouter un type',
      'update_item'                => 'Mettre à jour un type',
      'edit_item'                  => 'Editer un type',
      'view_item'                  => 'Voir tous les types',
      'separate_items_with_commas' => 'Séparer les type avec une virgule',
      'add_or_remove_items'        => 'Ajouter une supprimer un type',
      'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
      'popular_items'              => 'Types populaires',
      'search_items'               => 'Rechercher un type',
      'not_found'                  => 'Aucun type trouvé',
      'items_list'                 => 'Lister les types',
      'items_list_navigation'      => 'Lister les types',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    ];
    register_taxonomy( 'type', 'projet', $args );
  }

  public function activation()
  {
    // Je créé mon CPT Recipe
    $this->create_cpt();

    // Je créé mes taxonomies
    $this->create_taxonomies();

    // Je refresh les permaliens
    flush_rewrite_rules();
  }

  public function deactivation()
  {
    // Je refresh les permaliens
    flush_rewrite_rules();
  }
}
