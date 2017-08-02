<?php
/*
# =================================================
# custom-fonts.php
#
# Google fonts loading hints.
# =================================================
*/
?>

<?php

function bootpass_fonts_url() {
    $fonts_url = '';

    /*
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $montserrat = _x( 'on', 'Montserrat font: on or off', 'bootpass' );
    $kaushan = _x( 'on', 'Kaushan Script font: on or off', 'bootpass' );

    $font_families = array();

    if ( 'off' !== $kaushan ) {
        $font_families[] = 'Kaushan Script';
    }

    if ( 'off' !== $montserrat ) {
        $font_families[] = 'Montserrat:700';
    }

    if ( in_array( 'on', array($kaushan, $montserrat) )) {
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext,cyrillic,cyrillic-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function bootpass_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'bootpass-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'bootpass_resource_hints', 10, 2 );