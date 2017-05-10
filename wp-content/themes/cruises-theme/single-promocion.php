<?php
/*
 Template Name: Pagina Detalles de Promocion
*/

$theTitle = get_the_title();
$details = types_render_field("detalles", array());
$imagen = types_render_field("portada", array("raw"=>"false", "url"=>"true"));
$ID = get_the_id();

?>

<?php get_template_part( 'header', 'page' ); ?>

    <section class="content container-fluid">
            <div id="novedad-content" class="small-container">
                <div id="novedad-portada" style="height:800px">
                   <img id = "imagen-portada" style = "max-width: 100%" src="
                        <?php echo $imagen; ?>
                    ">
                </div>
                <div id ="novedad-titulo">
                    <h1><?php echo $theTitle; ?></h1>
                </div>
                <div id ="novedad-contenido">
                    <p class="multi-line"><strong></strong></p>
                </div>
                <div id ="detalles-titulo">
                    <h2>DETALLES DE LA PROMOCIÓN</h2>
                </div>
                <div id ="detalles-novedad">
                    <p class="multi-line">
                       <?php echo $details; ?> 
                    </p>
                </div>
                <div id ="comprar-novedad">
                        <?php get_template_part( 'partials/-reserve-button', 'page' ); ?>  
                </div>
                     
            </div>
    </section>
</div>
    
<?php get_template_part( 'partials/-noticias', 'page' ); ?>  
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>