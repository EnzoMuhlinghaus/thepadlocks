<?php
function plus_admin_bar () {
show_admin_bar(false);
}
add_action('after_setup_theme', 'plus_admin_bar');

function nom_prenom_scripts() {
wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
wp_enqueue_style( 'styles-graphiques', get_stylesheet_directory_uri() . '/css/styles-graphiques.css' );
wp_enqueue_style( 'typo-couleur', get_stylesheet_directory_uri() . '/css/styles-typographie-couleurs.css' );
}
add_action( 'wp_enqueue_scripts', 'nom_prenom_scripts' );


// menu
add_theme_support('menus');
register_nav_menus(array(
    'principale' => 'Navigation principale'
));

// Ajout des custom post type
function create_post_type() {
    register_post_type( 'projets',
        array(
            'labels' => array(
                'name' => __( 'Projets' ),
                'singular_name' => __( 'Projet' )
            ),
            'public' => true,
            'has_archive' => true,
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'thumbnail'),
        )
    );
//    flush_rewrite_rules( false );
}
add_action( 'init', 'create_post_type' );

function ajout_post_types() {
    register_post_type( 'galerie',
        array(
            'labels' => array(
                'name' => __( 'Galeries' ),
                'singular_name' => __( 'Galerie' )
            ),
            'public' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'supports' => array( 'title'),
        )
    );
    // Mettre en commentaire la ligne qui suit après avoir testé le bon fonctionnement.
//    flush_rewrite_rules( false );
}

add_action( 'init', 'ajout_post_types' );

/*
 * Ajout de champs personnalisés (avec le plug-in Meta Box à installer)
 * http://metabox.io/docs/define-fields/
 * https://github.com/rilwis/meta-box/blob/master/demo/demo.php
 */
add_filter( 'rwmb_meta_boxes', 'ajout_meta_boxes' );
function ajout_meta_boxes( $meta_boxes )
{
    // Répetez pour chaque "boîte" (groupes de champs)
    $meta_boxes[] = array(
        // le titre de la boîte
        'title'    => 'Galeries',
        'post_types' => array( 'galerie'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            // IMAGE UPLOAD
            array(
                'name' => esc_html__( 'Image Upload', 'your-prefix' ),
                'id'   => "image",
                'type' => 'image',
            ),
        )
    );
    return $meta_boxes;
}


/**
 * display image inserted into content
 */
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){ //Defines a default image
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}

/**
 * Pour aider à trouver les templates à utiliser
 */
function debug_template() {
    global $template;
    $affiche_template = print_r( $template , true );
    $affiche_body_class = print_r(get_body_class(), true);
    $affiche_debug = <<<EOD
Fichier de template :
$affiche_template
Body class
$affiche_body_class
EOD;
    // en commentaire dans le code HTML
    echo("<!--\n$affiche_debug\n-->");
    // Par JS dans la console
    $json_debug = json_encode($affiche_debug);
    echo("<script>console.log($json_debug)</script>");
}
// Laisser ce code dans le rendu final. Le mettre en commentaire APRES que j'ai noté.
add_action('wp_footer','debug_template');
