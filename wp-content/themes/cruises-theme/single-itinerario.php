<?php
/*
 Template Name: Pagina Detalles de Itinerario
*/
?>

<?php get_template_part( 'header', 'page' ); ?>
    
    <?php getDatosItinerario(); ?>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>