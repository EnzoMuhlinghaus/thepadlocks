<?php
function plus_admin_bar () {
show_admin_bar(false);
}

function ajout_post_types() {
    register_post_type( 'dateconcerts',
        array(
            'labels' => array(
                'name' => __( 'Concerts' ),
                'singular_name' => __( 'Concert' )
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
        'title'    => 'Meta boxes',
        'post_types' => array( 'dateconcerts'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            array(
                'id'   => 'date',
                'name' => __( 'Date', 'date' ),
                'type' => 'date',
            ),
            array(
                'id'   => 'salle',
                'name' => __( 'Salle', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'lieu',
                'name' => __( 'Lieu', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'lien',
                'name' => __( 'Lien', 'textdomain' ),
                'type' => 'text',
            ),
        )
    );
    return $meta_boxes;
}

function ajout_post_type_album() {
    register_post_type( 'albums',
        array(
            'labels' => array(
                'name' => __( 'Albums' ),
                'singular_name' => __( 'Album' )
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

add_action( 'init', 'ajout_post_type_album' );

/*
 * Ajout de champs personnalisés (avec le plug-in Meta Box à installer)
 * http://metabox.io/docs/define-fields/
 * https://github.com/rilwis/meta-box/blob/master/demo/demo.php
 */
add_filter( 'rwmb_meta_boxes', 'ajout_meta_boxes_albums' );
function ajout_meta_boxes_albums( $meta_boxes )
{
    // Répetez pour chaque "boîte" (groupes de champs)
    $meta_boxes[] = array(
        // le titre de la boîte
        'title'    => 'Meta boxes',
        'post_types' => array( 'albums'),
        // La liste des champs de formulaire affiché par la "boîte"
        'fields' => array(
            array(
                'id'   => 'Cover',
                'name' => __( 'Cover', 'media' ),
                'type' => 'file_input',
            ),
            array(
                'id'   => 'Pistes',
                'name' => __( 'Pistes', 'media' ),
                'type' => 'file_advanced',
            ),
        )
    );
    return $meta_boxes;
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
