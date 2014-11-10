<?php
/**
 * Roots includes
 */
require_once locate_template('/libs/utils.php');           // Utility functions
require_once locate_template('/libs/nav.php');             // Nav functions
require_once locate_template('/libs/postsinfo.php');       // Posts wrapper class


function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'barco_to_destino',
        'from' => 'barco',
        'to' => 'destino'
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>

