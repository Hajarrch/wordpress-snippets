<?php
// Quelques snippets WordPress simples.
// À placer dans le fichier functions.php d’un thème enfant pour les tester.

/**
 * Ajouter un texte personnalisé dans le footer du site.
 */
function hajar_custom_footer_text() {
    echo '<p style="text-align:center;font-size:13px;">Site réalisé avec WordPress (projet perso).</p>';
}
add_action('wp_footer', 'hajar_custom_footer_text');


/**
 * Charger un fichier CSS personnalisé dans le thème.
 * Exemple : wp-content/themes/mon-theme-enfant/custom.css
 */
function hajar_theme_enqueue_styles() {
    wp_enqueue_style(
        'hajar-custom-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'hajar_theme_enqueue_styles');
